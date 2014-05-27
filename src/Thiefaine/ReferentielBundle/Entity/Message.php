<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="MESSAGE", indexes={@ORM\Index(name="IDX_89F8CE65AA98CC6B", columns={"idtypemessage"}), @ORM\Index(name="IDX_89F8CE6599788D65", columns={"idutilisateurweb"})})
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
     * @ORM\Column(name="datevalidite", type="date", nullable=true)
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
     * @var \Utilisateurweb
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurweb")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateurweb", referencedColumnName="id")
     * })
     */
    private $idutilisateurweb;

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
     * @var \Thiefaine\ReferentielBundle\Entity\Alerte
     * @ORM\OneToOne(targetEntity="Alerte", mappedBy="idmessage", cascade={"persist"})
     */
    private $alerte;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Typemessage
     */
    private $typemessage;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Utilisateurweb
     */
    private $utilisateurweb;


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
     * Set alerte
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Alerte $alerte
     * @return Message
     */
    public function setAlerte(\Thiefaine\ReferentielBundle\Entity\Alerte $alerte = null)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Alerte 
     */
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set typemessage
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Typemessage $typemessage
     * @return Message
     */
    public function setTypemessage(\Thiefaine\ReferentielBundle\Entity\Typemessage $typemessage = null)
    {
        $this->typemessage = $typemessage;

        return $this;
    }

    /**
     * Get typemessage
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Typemessage 
     */
    public function getTypemessage()
    {
        return $this->typemessage;
    }

    /**
     * Set utilisateurweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateurweb
     * @return Message
     */
    public function setUtilisateurweb(\Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateurweb = null)
    {
        $this->utilisateurweb = $utilisateurweb;

        return $this;
    }

    /**
     * Get utilisateurweb
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Utilisateurweb 
     */
    public function getUtilisateurweb()
    {
        return $this->utilisateurweb;
    }

}
