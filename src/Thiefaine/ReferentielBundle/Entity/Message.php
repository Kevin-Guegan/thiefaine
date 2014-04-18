<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 */
class Message
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
     * @var \Thiefaine\ReferentielBundle\Entity\Typemessage
     */
    private $idtypemessage;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Utilisateur
     */
    private $idutilisateur;


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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * Set idtypemessage
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Typemessage $idtypemessage
     * @return Message
     */
    public function setIdtypemessage(\Thiefaine\ReferentielBundle\Entity\Typemessage $idtypemessage = null)
    {
        $this->idtypemessage = $idtypemessage;

        return $this;
    }

    /**
     * Get idtypemessage
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Typemessage 
     */
    public function getIdtypemessage()
    {
        return $this->idtypemessage;
    }

    /**
     * Set idutilisateur
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateur $idutilisateur
     * @return Message
     */
    public function setIdutilisateur(\Thiefaine\ReferentielBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Utilisateur 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Utilisateurweb
     */
    private $idutilisateurweb;


    /**
     * Set idutilisateurweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateurweb
     * @return Message
     */
    public function setIdutilisateurweb(\Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateurweb = null)
    {
        $this->idutilisateurweb = $idutilisateurweb;

        return $this;
    }

    /**
     * Get idutilisateurweb
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Utilisateurweb 
     */
    public function getIdutilisateurweb()
    {
        return $this->idutilisateurweb;
    }
}
