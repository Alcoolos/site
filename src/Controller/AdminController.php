<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit;
use App\Entity\Notes;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
  * @Route("/admin/list/users",name="user_list_admin",requirements={"page"="\d+"})
  */
  public function list_users($page=1)
  {
    $users = $this->getDoctrine()
        ->getRepository(User::class)
        ->findAll();



    return $this->render('user_list_admin.html.twig',array('users'=>$users));
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
            ->add('desc', TextareaType::class, array('label' => 'Description','attr' => array('cols' => '100','rows'=>'25')))
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
          return $this->redirectToRoute('alcool_list_admin');


      }

      return $this->render('form.html.twig', array(
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
            ->add('desc', TextareaType::class, array('label' => 'Description','attr' => array('cols' => '100','rows'=>'25')))
            ->add('imglink', FileType::class, array('label' => 'Image (jpg file)','data_class'   =>  null,'required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save Changes'))
            ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted()) {
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
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
          return $this->redirectToRoute('alcool_list_admin');
        }
        else {
          $alcool->setImgLink($previousfile);
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
          return $this->redirectToRoute('alcool_list_admin');
          //$form['imglink']->setData($alcool->getImgLink());
        }



          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!


      }

      return $this->render('form.html.twig', array(
            'form' => $form->createView(),
      ));
    }

    /**
    * @Route("/admin/delete/{name}",name="delete")
    */
    public function deleteAlcool($name,Request $requestdel)
    {
      $fileSystem = new Filesystem();
      $repository = $this->getDoctrine()->getRepository(Produit::class);
      $alcool = $repository->findOneBy([
          'name' => $name,
      ]);

      $delform = $this->createFormBuilder($alcool)
            ->add('delete', SubmitType::class, array('label' => 'Supprimer'))
            ->getForm();

      $delform->handleRequest($requestdel);

      if ($delform->isSubmitted()) {
            $path = $this->getParameter('alcools_directory').'/'.$alcool->getImgLink();
            $fileSystem->remove($path);

            $allNotes = $this->getDoctrine()
             ->getRepository(Notes::class)
             ->findByProduct($alcool);

            $em = $this->getDoctrine()->getManager();
            foreach ($allNotes as $aNote) {
                    $em->remove($aNote);
                }

            $em->remove($alcool);
            $em->flush();

            return $this->redirectToRoute('alcool_list_admin');
        }




      return $this->render('form.html.twig', array(
            'form' => $delform->createView()
      ));
    }


    /**
    * @Route("/admin/delete/user/{id}",name="delete_user")
    */
    public function deleteUser($id,Request $requestdel)
    {
      $repository = $this->getDoctrine()->getRepository(User::class);
      $user = $repository->findOneBy([
          'id' => $id,
      ]);

      $delform = $this->createFormBuilder($user)
            ->add('delete', SubmitType::class, array('label' => 'Supprimer'))
            ->getForm();

      $delform->handleRequest($requestdel);

      if ($delform->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();

            return $this->redirectToRoute('user_list_admin');
        }




      return $this->render('form.html.twig', array(
            'form' => $delform->createView()
      ));
    }

    /**
    * @Route("/admin/modify/user/{id}",name="modify_user")
    */
    public function modifyUser(Request $request,$id)
    {
      $repository = $this->getDoctrine()->getRepository(User::class);
      $user = $repository->findOneBy([
          'id' => $id,
      ]);


      $form = $this->createFormBuilder($user)
            ->add('username', TextType::class, array('label' => 'Pseudp'))
            ->add('lastName', TextType::class, array('label' => 'Nom'))
            ->add('firstName', TextType::class, array('label' => 'Prénom'))
            ->add('eMail', TextType::class, array('label' => 'Email'))
            ->add('isAdmin', CheckboxType::class, array('label' => 'Est Admin','required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
            ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted()) {

          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
          return $this->redirectToRoute('user_list_admin');

      }

      return $this->render('form.html.twig', array(
            'form' => $form->createView(),
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
