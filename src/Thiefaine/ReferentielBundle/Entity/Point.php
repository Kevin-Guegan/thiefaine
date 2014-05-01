<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Point
 */
class Point
{
    /**
     * @var integer
     */
    private $id;

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
    private $radius;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Lieu
     */
    private $idlieu;


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
     * Set latitude
     *
     * @param string $latitude
     * @return Point
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
     * @return Point
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
     * Set radius
     *
     * @param integer $radius
     * @return Point
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get radius
     *
     * @return integer 
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set idlieu
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Lieu $idlieu
     * @return Point
     */
    public function setIdlieu(\Thiefaine\ReferentielBundle\Entity\Lieu $idlieu = null)
    {
        $this->idlieu = $idlieu;

        return $this;
    }

    /**
     * Get idlieu
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Lieu 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }
}
