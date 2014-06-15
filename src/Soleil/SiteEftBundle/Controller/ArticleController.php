<?php
/**
 * Description of ArticleController
 *
 * @author macbook
 */
namespace Soleil\SiteEftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Soleil\SiteEftBundle\Entity\Articles;

class ArticleController extends Controller {
     /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function listeArticlesAction() {
        
        $rsArticles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Articles')
                         ->findBy(array('categorie' => 2));
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('SoleilSiteEftBundle:Articles:listeArticles.html.twig',
                array('articles' => $rsArticles));
    }
    /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function articleAcceuilAction() {
        
        $rArticle = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Articles')
                         ->findOneBy(array('categorie' => 1));
        
        //je balance cette rubrique a la vue listeBlogs
        return $this->render('SoleilSiteEftBundle:Articles:articleAcceuil.html.twig',
                array('article' => $rArticle));
    }
     /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function articleVedetteAction() {
        
        $rArticle = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Articles')
                         ->findOneBy(array('vedette' => 1));
        
        //je balance cette rubrique a la vue listeBlogs
        return $this->render('SoleilSiteEftBundle:Articles:articleVedette.html.twig',
                array('article' => $rArticle));
    }
}
