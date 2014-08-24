<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 */
class Information
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \DateTime
     */
    private $datemiseajour;

    /**
     * @var \DateTime
     */
    private $datevalidite;

    /**
     * @var integer
     */
    private $compteurlecture;

    /**
     * @var string
     */
    private $urlphoto;

    /**
     * @var string
     */
    private $urllien;

    /**
     * @var boolean
     */
    private $alerte;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Zone
     */
    private $zone;

    /**
     * @var \Thiefaine\UserBundle\Entity\Utilisateurweb
     */
    private $utilisateurweb;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     * @return Information
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Information
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Information
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datemiseajour
     *
     * @param \DateTime $datemiseajour
     * @return Information
     */
    public function setDatemiseajour($datemiseajour)
    {
        $this->datemiseajour = $datemiseajour;

        return $this;
    }

    /**
     * Get datemiseajour
     *
     * @return \DateTime 
     */
    public function getDatemiseajour()
    {
        return $this->datemiseajour;
    }

    /**
     * Set datevalidite
     *
     * @param \DateTime $datevalidite
     * @return Information
     */
    public function setDatevalidite($datevalidite)
    {
        $this->datevalidite = $datevalidite;

        return $this;
    }

    /**
     * Get datevalidite
     *
     * @return \DateTime 
     */
    public function getDatevalidite()
    {
        return $this->datevalidite;
    }

    /**
     * Set compteurlecture
     *
     * @param integer $compteurlecture
     * @return Information
     */
    public function setCompteurlecture($compteurlecture)
    {
        $this->compteurlecture = $compteurlecture;

        return $this;
    }

    /**
     * Get compteurlecture
     *
     * @return integer 
     */
    public function getCompteurlecture()
    {
        return $this->compteurlecture;
    }

    /**
     * Set urlphoto
     *
     * @param string $urlphoto
     * @return Information
     */
    public function setUrlphoto($urlphoto)
    {
        $this->urlphoto = $urlphoto;

        return $this;
    }

    /**
     * Get urlphoto
     *
     * @return string 
     */
    public function getUrlphoto()
    {
        return $this->urlphoto;
    }

    /**
     * Set urllien
     *
     * @param string $urllien
     * @return Information
     */
    public function setUrllien($urllien)
    {
        $this->urllien = $urllien;

        return $this;
    }

    /**
     * Get urllien
     *
     * @return string 
     */
    public function getUrllien()
    {
        return $this->urllien;
    }

    /**
     * Set alerte
     *
     * @param boolean $alerte
     * @return Information
     */
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return boolean 
     */
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set zone
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $zone
     * @return Information
     */
    public function setZone(\Thiefaine\ReferentielBundle\Entity\Zone $zone = null)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Zone 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set utilisateurweb
     *
     * @param \Thiefaine\UserBundle\Entity\Utilisateurweb $utilisateurweb
     * @return Information
     */
    public function setUtilisateurweb(\Thiefaine\UserBundle\Entity\Utilisateurweb $utilisateurweb = null)
    {
        $this->utilisateurweb = $utilisateurweb;

        return $this;
    }

    /**
     * Get utilisateurweb
     *
     * @return \Thiefaine\UserBundle\Entity\Utilisateurweb 
     */
    public function getUtilisateurweb()
    {
        return $this->utilisateurweb;
    }

    /**
     * Add categories
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Categorie $categories
     * @return Information
     */
    public function addCategory(\Thiefaine\ReferentielBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Categorie $categories
     */
    public function removeCategory(\Thiefaine\ReferentielBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
