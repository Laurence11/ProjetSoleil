<?php
/**
 * Description of CategorieController
 *
 * @author macbook
 */

namespace Soleil\SiteEftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Soleil\SiteEftBundle\Entity\Categories;

class CategorieController extends Controller
{
/**
     * Action detail : detail de la page
     * @param type $slug
     * @return vieuw : Categories/detail
     */
    public function detailAction($slug) {
        //je vais chercher les infos de la page qui correspond au slug
        $rCategorie = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('SoleilSiteEftBundle:Categories')
                            ->findOneBySlug($slug);
        
        //je balance cette rubrique a la vue detail
        return $this->render('SoleilSiteEftBundle:Categories:detail.html.twig',
                array('categorie' => $rCategorie));       
       
    } 
    /**
     * Action menu : liste des categories pour le menu
     * @return vieuw : Categories/menu 
     */
    public function menuAction() {
        
         $rsCategories = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('SoleilSiteEftBundle:Categories')
                          ->findAll();
         
        //je balance cette rubrique a la vue detail
        return $this->render('SoleilSiteEftBundle:Categories:menu.html.twig',
                array('categories' => $rsCategories));
        
    }
}

