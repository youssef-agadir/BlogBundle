<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\ArticleCompetence;

class BlogController extends Controller
{
  public function indexAction($page)
  {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if( $page < 1 )
    {
      // On déclenche une exception NotFoundHttpException
      // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }
    
     // Les articles :
    // entityManager
    $em = $this->getDoctrine()->getManager();

    $articles = $em->getRepository('SdzBlogBundle:Article')
                   ->getArticles(1,$page);

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
    'articles'   => $articles,
    'page'       => $page,
    'nombrePage' => ceil(count($articles)/1)
    ));
  }
  
    public function voirAction(Article $article)
    {
      // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getManager();

      // On récupère les articleCompetence pour l'article $article
      $liste_articleCompetence = $em->getRepository('SdzBlogBundle:ArticleCompetence')
                              ->findByArticle($article->getId());
      $liste_competence = $article->getArticleCompetences();
      // Puis modifiez la ligne du render comme ceci, pour prendre en compte les articleCompetence :
      return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
        'article'      => $article,
        'liste_competence'  => $liste_competence,
        // … et évidemment les autres variables que vous pouvez avoir
      ));
    }
  
  public function ajouterAction()
  {
    
    // On crée un objet Article
    $article = new Article();

    $form = $this->createFormBuilder($article)
        ->add('date',        'date')
        ->add('titre',       'text')
        ->add('contenu',     'textarea')
        ->add('auteur',      'text')
        ->add('publication', 'checkbox')
        ->getForm();
    
    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array(
    'form' => $form->createView(),
    ));
  }
   public function modifierAction($id)
  {

    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }


    return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
      'article' => $article
    ));
  }

    public function supprimerAction($id)
    {
      // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getManager();

      // On récupère l'entité correspondant à l'id $id
      $article = $em->getRepository('SdzBlogBundle:Article')
                    ->find($id);

      if ($article === null) {
        throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
      }

      if($this->get('request')->getMethod() == 'POST'){

      $this->get('session')->getFlashBag()->add('info','Article bien supprimer');

      return $this->redirect($this->generateUrl('sdzblog_accueil'));
    }
    return $this->render('SdzBlogBundle:Blog:supprimer.html.twig',
      array('article' => $article
        ));
      
    }
    public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
    {
      

      $liste = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('SdzBlogBundle:Article')
                    ->findBy(
                      array(),
                      array('date' => 'desc'),
                      $nombre,
                      0
                      );
      
      return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
        'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
      ));
    }
}

