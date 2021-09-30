<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController {
    /**
     * @Route("/")
     */
    public function index() {
        return new Response('Hello World');
    }
    /**
     * @Route("/user/{username}")
     */
    public function show($username) {
        return new Response("Showing data of $username");
    }
}