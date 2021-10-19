<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/table", name="table")
     */

class TableController extends AbstractController
{
    /**
     * @Route("/print/{n}/{t}", name="table_print")
     */
    public function index(int $n,int $t): Response
    {
        return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
            'n'=>$n,
            't'=>$t,
            

        ]);
    }
}
