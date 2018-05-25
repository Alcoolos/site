<?php
// src/Controller/WelcomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NumberController extends Controller
{

    /**
     * @Route("/page/{page}", name="lol", requirements={})
     */
    public function number($page = "lol")
    {

        return $this->render('luckynumber.html.twig', array(
    'number' => $page, 'caca' => 0,
));
    }
}


?>
