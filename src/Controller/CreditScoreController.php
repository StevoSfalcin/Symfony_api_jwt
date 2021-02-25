<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\CreditScore;
use App\Form\Type\CreditScoreType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

Class CreditScoreController extends AbstractApiController
{
    /**
    * @Route("/api")
    */

    public function index(Request $resquest)
    {
        $data = $this->getDoctrine()->getRepository(CreditScore::class)->findAll();

        return $this->json($data);

    }

    public function create(Request $resquest)
    {
        $form = $this->buildForm(CreditScoreType::class);

        $form->handleRequest($resquest);

        if(!$form->isSubmitted() || !$form->isValid())
        {
            print 'Formulario invalido';
            exit;
        }

        /** @var CreditScore $CreditScore */
        $CreditScore = $form->getData();

        $this->getDoctrine()->getManager()->persist($CreditScore);
        $this->getDoctrine()->getManager()->flush();

        return $this->json('Registro Criado Com Sucesso');
        

    }


}