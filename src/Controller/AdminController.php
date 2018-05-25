<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;



class AdminController extends Controller
{
  /**
  * @Route("/admin",name="admin_hub")
  */
  public function hub()
  {

    return $this->render('admin.html.twig');
  }

  /**
  * @Route("/admin/list/alcool/{page}",name="alcool_list_admin",requirements={"page"="\d+"})
  */
  public function list_ingr($page=1)
  {
    $alcools = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findFromTo16(($page-1)*16);

    $nbrAlcool = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->countAlcool($page);




    return $this->render('alcool_list_admin.html.twig',array('alcools'=>$alcools,'page'=>$page,'nbrAlcool'=>$nbrAlcool));
  }


    /**
    * @Route("/admin/new",name="new")
    */
    public function addAlcool(Request $request)
    {
      $product = new Produit();

      $form = $this->createFormBuilder($product)
            ->add('name', TextType::class, array('label' => 'Name'))
            ->add('type', TextType::class, array('label' => 'Type'))
            ->add('desc', TextType::class, array('label' => 'Description'))
            ->add('imglink', FileType::class, array('label' => 'Image (jpg file)'))
            ->add('save', SubmitType::class, array('label' => 'Add Alcool'))
            ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          // $form->getData() holds the submitted values
          // but, the original `$task` variable has also been updated
          $task = $form->getData();


          $file = $product->getImgLink();
          $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
          $file->move(
                $this->getParameter('alcools_directory'),
                $fileName
            );
          $product->setImgLink($fileName);
          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($product);
          $entityManager->flush();


      }

      return $this->render('new.html.twig', array(
            'form' => $form->createView(),
      ));
    }

    /**
    * @Route("/admin/modify/{name}",name="modify")
    */
    public function modifyAlcool(Request $request,$name)
    {
      $fileSystem = new Filesystem();
      $repository = $this->getDoctrine()->getRepository(Produit::class);
      $alcool = $repository->findOneBy([
          'name' => $name,
      ]);

      $previousfile = $alcool->getImgLink();

      $form = $this->createFormBuilder($alcool)
            ->add('name', TextType::class, array('label' => 'Name'))
            ->add('type', TextType::class, array('label' => 'Type'))
            ->add('desc', TextType::class, array('label' => 'Description'))
            ->add('imglink', FileType::class, array('label' => 'Image (jpg file)','data_class'   =>  null,'required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save Changes'))
            ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          // $form->getData() holds the submitted values
          // but, the original `$task` variable has also been updated
          $task = $form->getData();

        $img = $form['imglink']->getData();
        if($img){
          $path = $this->getParameter('alcools_directory').'/'.$previousfile;
          $fileSystem->remove($path);
          $file = $alcool->getImgLink();
          $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
          $file->move(
          $this->getParameter('alcools_directory'),
            $fileName
          );
          $alcool->setImgLink($fileName);
        }



          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();

      }

      return $this->render('modify.html.twig', array(
            'form' => $form->createView(),
      ));
    }

    /**
    * @Route("/admin/delete/{name}",name="delete")
    */
    public function deleteAlcool($name,Request $requestdel)
    {
      $repository = $this->getDoctrine()->getRepository(Produit::class);
      $alcool = $repository->findOneBy([
          'name' => $name,
      ]);

      $delform = $this->createFormBuilder($alcool)
            ->add('delete', SubmitType::class, array('label' => 'Supprimer'))
            ->getForm();

      $delform->handleRequest($requestdel);

      if ($delform->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alcool);
            $em->flush();
        }




      return $this->render('delete.html.twig', array(
            'delform' => $delform->createView()
      ));
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
