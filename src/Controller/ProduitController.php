<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Produit;
use App\Entity\User;
use App\Entity\Notes;

class ProduitController extends Controller
{
  /**
  * @Route("/alcool/{page}",name="alcool_list",requirements={"page"="\d+"})
  */
  public function list_ingr($page=1)
  {
    $alcool_list = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findFromTo18(($page-1)*18);

    $nbrAlcool = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->countAlcool($page);

    $alcools = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findallyouneed();




    return $this->render('alcool_list.html.twig',array('alcools'=>$alcools,'page'=>$page,'nbrAlcool'=>$nbrAlcool,'alcool_list'=>$alcool_list));
  }

     /**
       * @Route("/alcool/{name}", name="alcool_show")
       */
      public function showAction($name)
      {
        $session= $this->get('session');
        $user=$session->get("user");
        $repository = $this->getDoctrine()->getRepository(Produit::class);

          $alcools = $repository->findallyouneed();


          // $alcool = $this->getDoctrine()
          //   ->getRepository(Produit::class)
          //   ->find($id);

          $alcool = $repository->findOneBy([
              'name' => $name,
          ]);

          if (!$alcool) {
              throw $this->createNotFoundException(
                  'No product found for name : '.$name
              );
          }

          $allNotes = $this->getDoctrine()
           ->getRepository(Notes::class)
           ->findByProduct($alcool);


          $counter=0;
          $voted=false;
          if (!(empty($user)))
          {
            foreach ($allNotes as $aNote) {
              $counter = $counter + 1;
              if(!(empty($aNote->getUtilisateur())) && $aNote->getUtilisateur()->getId()==$user->getId()){
                $voted=true;
              }
            }
          }
          $count="";
          $count = "(".$counter." vote";
          if($counter > 1){
            $count = $count."s";
          }
          $count = $count.")";

          return $this->render('article.html.twig',
          array('alcool' => $alcool,'alcools' => $alcools,'voted' => $voted,'count'=>$count)
      );
      }

      /**
        * @Route("/alcool/vote/{name}/{note}", name="alcool_vote",requirements={"note"="\d+"})
        */
       public function voteAction($name,$note)
       {
         $session= $this->get('session');
         $userId=$session->get("user")->getId();

         $repository = $this->getDoctrine()->getRepository(User::class);
         $user = $repository->findOneBy([
                  'id' => $userId,
         ]);

         $repository = $this->getDoctrine()->getRepository(Produit::class);
         $alcool = $repository->findOneBy([
                  'name' => $name,
         ]);

         if (!$alcool) {
             throw $this->createNotFoundException(
                 'No product found for name : '.$name
             );
         }

           $em = $this->getDoctrine()->getManager();

           $notes = new Notes();
           $notes->setNote($note);
           $notes->setProduit_id($alcool);
           $notes->setUtilisateur($user);

           $em->persist($notes);
           $em->flush();

           $allNotes = $this->getDoctrine()
            ->getRepository(Notes::class)
            ->findByProduct($alcool);

            $moy=0.0;
            $count=0;
            foreach ($allNotes as $aNote) {
              $moy = $moy + floatval($aNote->getNote());
              $count = $count + 1;
            }

            $moy=$moy/$count;


           $alcool->setNotemoy($moy);
           $em->flush();

           // $alcool = $this->getDoctrine()
           //   ->getRepository(Produit::class)
           //   ->find($id);
           return $this->redirectToRoute('alcool_show', [
               'name' => $alcool->getName()
           ]);
       }




}

?>
