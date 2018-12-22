<?php

namespace App\Controller;

use App\Example\ExampleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        /** @var ExampleService $exampleService */
        $exampleService = $this->get('example_service');
        $messageFromService = $exampleService->blah();

        return $this->render('base.html.twig', ['message' => $messageFromService]);
    }

    public static function getSubscribedServices()
    {
        return parent::getSubscribedServices() + [
            'example_service' => ExampleService::class
        ];
    }
}
