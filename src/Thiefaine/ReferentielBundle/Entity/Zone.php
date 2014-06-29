<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 */
class Zone
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
     */
    private $points;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $alertes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->points = new \Doctrine\Common\Collections\ArrayCollection();
        $this->alertes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add alertes
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Alerte $alertes
     * @return Zone
     */
    public function addAlerte(\Thiefaine\ReferentielBundle\Entity\Alerte $alertes)
    {
        $this->alertes[] = $alertes;

        return $this;
    }

    /**
     * Remove alertes
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Alerte $alertes
     */
    public function removeAlerte(\Thiefaine\ReferentielBundle\Entity\Alerte $alertes)
    {
        $this->alertes->removeElement($alertes);
    }

    /**
     * Get alertes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlertes()
    {
        return $this->alertes;
    }
}
