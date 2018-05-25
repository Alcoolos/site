<?php
// src/Controller/WelcomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Produit;
use App\Entity\Cocktail;

class WelcomeController extends Controller
{
    /**
     * @Route("/home",name="home")
     */
    public function getfirst10()
    {
      $alcool = $this->getDoctrine()
          ->getRepository(Produit::class)
          ->findallyouneed();

        return $this->render('welcome/welcome.html.twig',
        array('alcools' => $alcool)
        );
    }

    /**
      * @Route("/")
      */
    public function displayHome()
    {
      return $this->redirectToRoute('home');
    }

}

?>
