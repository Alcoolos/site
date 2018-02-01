<?php
// src/Controller/WelcomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome")
     */
    public function welcome()
    {
        return $this->render('welcome/welcome.html.twig'
        );
    }
}

?>