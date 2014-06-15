<?php

/**
 * Description of VideoController
 *
 * @author macbook
 */

namespace Soleil\SiteEftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Soleil\SiteEftBundle\Entity\Videos;
use Zend_Gdata_YouTube;

class VideoController extends Controller {
     /**
     * Action afficher : affichage des videos
     * @return vieuw : videos /liste
     */
    public function listeVideosAction() {
        
        $rsVideos = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Videos')
                         ->findBy(array('categorie' => 6));
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('SoleilSiteEftBundle:Videos:listeVideos.html.twig',
                array('videos' => $rsVideos));
    }
    public function videoAcceuilAction() {
        
        $rVideo = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Videos')
                         ->findOneBy(array('categorie' => 1));
        
        //je balance cette rubrique a la vue listeBlogs
        return $this->render('SoleilSiteEftBundle:Videos:videoAcceuil.html.twig',
                array('video' => $rVideo));
    }
}
