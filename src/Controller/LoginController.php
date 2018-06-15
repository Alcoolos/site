<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Produit;
use App\Entity\Notes;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {

      $alcool = $this->getDoctrine()
          ->getRepository(Produit::class)
          ->findallyouneed();
        // just setup a fresh $task object (remove the dummy data)
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class, array('required'=> True,'label' => "Nom d'utilisateur"))
            ->add('password', PasswordType::class, array('required'=> True,'label' => 'Mot de passe'))
            ->add('login', SubmitType::class, array('label' => 'Connexion'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $repository = $this->getDoctrine()->getRepository(User::class);
            $user = $repository->findOneBy(['username' => $form['username']->getData()]);

            if ((!(empty($user))) && (hash('sha256', $form['password']->getData()) == $user->getPassword()))
            {
              $session = new Session();
              $session->invalidate();
              $session->start();
              $session->set('user', $user);
              return $this->redirectToRoute('home');

            }

            return $this->render('login/index.html.twig', array(
                'form' => $form->createView(),'response'=>"Mauvais identifiant ou mot de passe",'alcools'=>$alcool
            ));
        }



        return $this->render('login/index.html.twig', array(
            'form' => $form->createView(),'response'=>"",'alcools'=>$alcool
        ));


    }

    /**
     * @Route("/logout", name="logout")
     */

    public function disconnect(Request $request)
    {
        $session= $this->get('session');
        $session->invalidate();

          return $this->redirectToRoute('home');





    }

    /**
     * @Route("/profile", name="profile")
     */

    public function showProfile()
    {

      $session= $this->get('session');
      $user = $session->get("user");

      $repository = $this->getDoctrine()->getRepository(Notes::class);
      $notes = $repository->findBy([
          'utilisateur' => $user,
      ]);


      $alcool = $this->getDoctrine()
          ->getRepository(Produit::class)
          ->findallyouneed();

        return $this->render('profil.html.twig',
        array('alcools' => $alcool,'notes'=>$notes)
        );
    }
}
