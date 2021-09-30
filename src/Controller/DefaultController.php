<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController {
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
        if ('marijus' == $username) {
            $stats = [
                'Role: Admin',
                'About: just testing'
            ];
        } else {
            $stats = [
                'Role: user',
                'About: this is the "else" block'
            ];
        }

        return $this->render('default/show.html.twig', [
            'variable' => "$username",
            'stats' => $stats
        ]);
        // return new Response("Showing data of $username");
    }
}