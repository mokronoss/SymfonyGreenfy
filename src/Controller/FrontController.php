<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/blog-details", name="blog-details")
     */
    public function blogDetails()
    {
        return $this->render('front/blog_details.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('front/blog.html.twig');
    }

    /**
     * @Route("/check-out", name="check-out")
     */
    public function checkOut()
    {
        return $this->render('front/check_out.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('front/contact.html.twig');
    }

    /**
     * @Route("/home", name="index")
     */
    public function index()
    {
        return $this->render('front/index.html.twig');
    }


}
