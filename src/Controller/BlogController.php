<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig');
    }

    /**
    * @Route("/12", name="blog_show")
    */
    public function show() {
        return $this->render('blog/show.html.twig');
    }
}
