<?php
/**
 * Description of ParticipantController
 *
 * @author macbook
 */
namespace Soleil\SiteEftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Soleil\SiteEftBundle\Form\ParticipantsType;
use Soleil\SiteEftBundle\Entity\Participants;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ParticipantController extends Controller{
    
    public function inscriptionAction() {
        
        $modelManager = $this->getDoctrine()->getManager();  
        $rParticipant = new Participants();
        
        $form = $this->createForm(new ParticipantsType(),$rParticipant);
        
        $requete = $this->getRequest();
        
        // Si c'est POST, on ajoute
                   if ($requete->isMethod('POST')) {
                       // On ajuste les valeurs aux champs
                           $form->bind($requete);
                           $inscription = $form->getData();
                    if ($form->isValid()) {
                       // On stocke et on exécute
                           $modelManager->persist($inscription);
                           $modelManager->flush();
                           
       return $this->redirect($this->generateUrl('soleil_site_eft_pages' , array('slug' => 'agenda')));                    
                   }
                   }   
        return $this->render('SoleilSiteEftBundle:Inscriptions:InscriptionFormation.html.twig',
                                array('form' => $form->createView()
                                      ));
     
     }
}
