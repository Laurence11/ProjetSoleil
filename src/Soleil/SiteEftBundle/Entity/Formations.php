<?php

namespace Soleil\SiteEftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations", indexes={@ORM\Index(name="fk_formations_categories1_idx", columns={"categorie"})})
 * @ORM\Entity
 */
class Formations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=true)
     */
    private $texteEn;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="participantMax", type="smallint", nullable=false)
     */
    private $participantmax;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $dateDebut;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $dateFin;


    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Participants", inversedBy="formations")
     * @ORM\JoinTable(name="reservations",
     *   joinColumns={
     *     @ORM\JoinColumn(name="formations", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="participants", referencedColumnName="id")
     *   }
     * )
     */
    private $participants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participants = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Formations
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Formations
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Formations
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set texteEn
     *
     * @param string $texteEn
     * @return Formations
     */
    public function setTexteEn($texteEn)
    {
        $this->texteEn = $texteEn;

        return $this;
    }

    /**
     * Get texteEn
     *
     * @return string 
     */
    public function getTexteEn()
    {
        return $this->texteEn;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Formations
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set participantmax
     *
     * @param integer $participantmax
     * @return Formations
     */
    public function setParticipantmax($participantmax)
    {
        $this->participantmax = $participantmax;

        return $this;
    }

    /**
     * Get participantmax
     *
     * @return integer 
     */
    public function getParticipantmax()
    {
        return $this->participantmax;
    }

    /**
     * Set dateDebut
     *
     * @param \Date $date
     * @return Formations
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

        /**
     * Set dateFin
     *
     * @param \Date $date
     * @return Formations
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \Date 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
    /**
     * Set categorie
     *
     * @param \Soleil\SiteEftBundle\Entity\Categories $categorie
     * @return Formations
     */
    public function setCategorie(\Soleil\SiteEftBundle\Entity\Categories $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Soleil\SiteEftBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add participants
     *
     * @param \Soleil\SiteEftBundle\Entity\Participants $participants
     * @return Formations
     */
    public function addParticipant(\Soleil\SiteEftBundle\Entity\Participants $participants)
    {
        $this->participants[] = $participants;

        return $this;
    }

    /**
     * Remove participants
     *
     * @param \Soleil\SiteEftBundle\Entity\Participants $participants
     */
    public function removeParticipant(\Soleil\SiteEftBundle\Entity\Participants $participants)
    {
        $this->participants->removeElement($participants);
    }

    /**
     * Get participants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipants()
    {
        return $this->participants;
    }
}
