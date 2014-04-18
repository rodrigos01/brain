<?php

namespace PolypApps\Bundle\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use\Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new JsonResponse("This is the Auth Module");
    }
    
    public function loginAction(Request $request) {
        $headers = $request->headers->all();
        $post = $request->request;
        $username = $post->get("username");
        
        return new JsonResponse(json_encode($headers));
    }
}
