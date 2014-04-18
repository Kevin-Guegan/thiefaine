<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 */
class Lieu
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
     * @var string
     */
    private $zoom;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var string
     */
    private $datecreation;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Utilisateurweb
     */
    private $idutilisateurweb;


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
     * @return Lieu
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
     * @return Lieu
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
     * @return Lieu
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
     * @param string $zoom
     * @return Lieu
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return string 
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Lieu
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
     * Set datecreation
     *
     * @param string $datecreation
     * @return Lieu
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return string 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set idutilisateurweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateurweb
     * @return Lieu
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
