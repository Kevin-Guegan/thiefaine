<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="MESSAGE", indexes={@ORM\Index(name="MESSAGE_TYPEMESSAGE_ID1", columns={"idtypemessage"}), @ORM\Index(name="MESSAGE_UTILISATEURWEB_ID1", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemiseajour", type="datetime", nullable=true)
     */
    private $datemiseajour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevalidite", type="datetime", nullable=true)
     */
    private $datevalidite;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteurlecture", type="integer", nullable=true)
     */
    private $compteurlecture;

    /**
     * @var string
     *
     * @ORM\Column(name="urlphoto", type="text", nullable=true)
     */
    private $urlphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="urllien", type="text", nullable=true)
     */
    private $urllien;

    /**
     * @var \Typemessage
     *
     * @ORM\ManyToOne(targetEntity="Typemessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtypemessage", referencedColumnName="id")
     * })
     */
    private $idtypemessage;

    /**
     * @var \Utilisateurweb
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurweb")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="id")
     * })
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
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateur
     * @return Message
     */
    public function setIdutilisateur(\Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Utilisateurweb 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}
