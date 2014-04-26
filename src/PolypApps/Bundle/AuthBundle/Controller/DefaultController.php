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
        $post = $request->request;
        $server = $request->server;
        $ip = $server->get("REMOTE_ADDR");
        $username = $post->get("username");
        $password = $post->get("password");
        
        return new JsonResponse(["username"=>$username,"password"=>$password]);
    }
    
    public function loginWithServiceAction(Request $request) {
        $post = $request->request;
        $server = $request->server;
        $ip = $server->get("REMOTE_ADDR");
        $username = $post->get("serviceCode");
        $password = $post->get("apiKey");
        
        return new JsonResponse(["username"=>$username,"password"=>$password]);
    }
}
