<?php

namespace PolypApps\Bundle\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new \Symfony\Component\HttpFoundation\JsonResponse("This is the Auth Module");
    }
}
