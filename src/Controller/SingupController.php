<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;

class SingupController extends Controller
{

    /**
     * @Route("/signup", name="signup")
     */
    public function signup(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class, array('required'=> True,'label' => "Nom d'utilisateur"))
            ->add('eMail', EmailType::class, array('required' => True,'label' => "Adresse Email"))
            ->add('firstName', TextType::class,array('label' => 'Prénom'))
            ->add('lastName', TextType::class,array('label' => 'Nom de famille'))
            ->add('password', PasswordType::class,array('label' => 'Mot de passe'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated

            $user->setPassword(hash('sha256', $form["password"]->getData()));

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            $entityManager = $this->getDoctrine()->getManager();

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($user);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('singup/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
