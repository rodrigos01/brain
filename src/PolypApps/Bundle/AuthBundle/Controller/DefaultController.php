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
    
    /**
     * This Method is used to obtain the user’s apikey for more personalized 
     * responses in other methods
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse The APIKey of the 
     * user
     */
    public function loginAction(Request $request) {
        $post = $request->request;
        $server = $request->server;
        $username = $post->get("username");
        $password = $post->get("password");
        
        return new JsonResponse(["username"=>$username,"password"=>$password]);
    }
    
    /**
     * This method performs exactly like login, but instead of expect a 
     * user/password, it receives a service code and a service api key. 
     * The system must search which user has this api key for this service and 
     * return it’s apikey. If there is no user with this service-key 
     * combination, this user will be created, the generated api key will be 
     * sent and the new user can be joined to another existing user in the 
     * future
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse the APIKey of the 
     * user
     */
    public function loginWithServiceAction(Request $request) {
        $post = $request->request;
        $server = $request->server;
        $username = $post->get("serviceCode");
        $password = $post->get("apiKey");
        
        return new JsonResponse(["username"=>$username,"password"=>$password]);
    }
}
