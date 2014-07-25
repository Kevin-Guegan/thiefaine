<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Zone
 * @ExclusionPolicy("all")
 */
class Zone
{
    /**
     * @var integer
     * @Expose
     */
    private $id;

    /**
     * @var string
     * @Expose
     */
    private $nom;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var integer
     */
    private $zoom;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Expose
     */
    private $points;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $informations;

    /**
     * @var \Thiefaine\UserBundle\Entity\Utilisateurweb
     */
    private $utilisateurweb;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->points = new \Doctrine\Common\Collections\ArrayCollection();
        $this->informations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Zone
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
     * Set latitude
     *
     * @param string $latitude
     * @return Zone
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Zone
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set zoom
     *
     * @param integer $zoom
     * @return Zone
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return integer 
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Zone
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Add points
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Point $points
     * @return Zone
     */
    public function addPoint(\Thiefaine\ReferentielBundle\Entity\Point $points)
    {
        $this->points[] = $points;

        return $this;
    }

    /**
     * Remove points
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Point $points
     */
    public function removePoint(\Thiefaine\ReferentielBundle\Entity\Point $points)
    {
        $this->points->removeElement($points);
    }

    /**
     * Get points
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Add informations
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Information $informations
     * @return Zone
     */
    public function addInformation(\Thiefaine\ReferentielBundle\Entity\Information $informations)
    {
        $this->informations[] = $informations;

        return $this;
    }

    /**
     * Remove informations
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Information $informations
     */
    public function removeInformation(\Thiefaine\ReferentielBundle\Entity\Information $informations)
    {
        $this->informations->removeElement($informations);
    }

    /**
     * Get informations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Set utilisateurweb
     *
     * @param \Thiefaine\UserBundle\Entity\Utilisateurweb $utilisateurweb
     * @return Zone
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
}
