<?php

namespace PolypApps\Bundle\BrainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new \Symfony\Component\HttpFoundation\JsonResponse();
    }
}
