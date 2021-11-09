<?php

namespace App\Controller;

use App\Entity\Table;
use App\Form\TableChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/table", name="table")
 */
class TableController extends AbstractController
{
    /**
     * @Route("/select", name="table_select")
     */
    public function select(Request $request)
    {

        $form = $this->createForm(TableChoiceType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            $n = $data['table_number_list'];
            $t = $data['lines_count'];
            $color = $data['color'];

            $table = new Table($n);
            $calculations = $table->calcMultiply($t);
            $response = $this->render('table/index.html.twig', [
                'controller_name' => 'TableController',
                'calculations' => $calculations,
                'n' => $n,               
                'color' => $color,
            ]);
        } else {
            $response = $this->render('table/vue.html.twig', [
                'formulaire' => $form->createView(),
            ]);

        }
        return $response;
    }
    /**
     * @Route("/print/{n}/{t}", name="table_print")
     */
    public function index(int $n, int $t, Request $request): Response
    {
        $color = $request->get('c');
        return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
            'n' => $n,
            't' => $t,
            'color' => $color,

        ]);
    }
}
