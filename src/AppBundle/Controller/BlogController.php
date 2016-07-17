<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function showAction(Request $request)
    {
        $this->blogPostRepository = $this->getDoctrine()->getRepository('AppBundle:BlogPost');
        return $this->render('blog/show.html.twig', array('blogpost' => $this->blogPostRepository->find($blogId)));
    }

    public function listAction(Request $request, $subjectId)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM AppBundle:BlogPost a WHERE a.subject=" . $subjectId . " ORDER BY a.createTime DESC";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('blog/list.html.twig', array('pagination' => $pagination));
    }
}