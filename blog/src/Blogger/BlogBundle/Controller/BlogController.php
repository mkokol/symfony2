<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    public function showAction($id)
    {
        $dbManager = $this->getDoctrine()->getManager();
        $blog = $dbManager->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
        ));
    }
}
