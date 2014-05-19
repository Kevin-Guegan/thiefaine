<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="ZONE", indexes={@ORM\Index(name="IDX_967E2DB3DBDD131C", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Zone
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
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom", type="integer", nullable=false)
     */
    private $zoom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

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
     * @var \Thiefaine\ReferentielBundle\Entity\Alerte
     */
    private $alerte;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $points;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Utilisateurweb
     */
    private $utilisateurweb;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->points = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set alerte
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Alerte $alerte
     * @return Zone
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
     * Set utilisateurweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateurweb
     * @return Zone
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

    public function __toString()
    {
        return $this->getNom();
    }
}
