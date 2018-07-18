<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Oh my !');
    }

    /**
     * @Route("/news/why-asteroids-taste-like-bacon")
     */
    public function show()
    {
        return new Response('Future page to show one space article!');
    }
}