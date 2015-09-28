<?php

namespace Labrosite\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('LabrositeArticleBundle:Article')->findAll();
		
		return $this->render('LabrositeArticleBundle:Default:index.html.twig', array('articles' => $articles));
    }
	
    public function showAction($id)
    {
		$em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('LabrositeArticleBundle:Article')->findOneBy(array('id'=>$id));
		
		return $this->render('LabrositeArticleBundle:Default:show.html.twig', array('article' => $article));
    }
}
