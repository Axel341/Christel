<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





class HomeController extends Controller {

    /**
     * @param $prenom
     * @return Response
     * @Route("/hello/{prenom}/age/{age}", name = "hello")
     * @Route("/salut", name ="hello_base")
     *@Route("/hello/{prenom}", name = "hello_prenom")


     *
     * Montre la page qui dit bonjour
     */

    public function hello($prenom = 'anonyme',$age = 0){
        return $this-> render (
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]

        );
    }

    /**
     * @Route("/", name ="homepage")
     */


    public function home(){
        $prenoms = ["Lior"=> 31, "Joseph"=> 12,"Anne"=> 55];


        /** @var TYPE_NAME $prenoms */
        return $this ->render(
           'home.html.twig',

           [
               'title' => "Au revoir tout le monde" ,
               'age' => 12,
               'tableau' => $prenoms

           ]

       );


    }

}





