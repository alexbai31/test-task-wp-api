<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CalcController extends Controller
{
    /**
     * @Route("/calc/{a}/{b}", name="calc")
     */
    public function indexAction($a, $b)
    {
        if(!$a || !$b) {
            return new JsonResponse(
                array(
                    'success' => false, 
                    'data' => null,
                    'error' => 'A and B must be not null'
                )
            );
        }

        return new JsonResponse(
            array(
                'success' => true,
                'data' => $a/$b,
            )
        );
    }
}
