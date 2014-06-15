<?php

/**
 * Description of FormationController
 *
 * @author macbook
 */

namespace Soleil\SiteEftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Soleil\SiteEftBundle\Entity\Formations;

class FormationController extends Controller {
    /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function listeFormationsAction() {
        
        $rsFormations = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('SoleilSiteEftBundle:Formations')
                         ->findAll();
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('SoleilSiteEftBundle:Formations:listeFormations.html.twig',
                array('formations' => $rsFormations));
    }
}
