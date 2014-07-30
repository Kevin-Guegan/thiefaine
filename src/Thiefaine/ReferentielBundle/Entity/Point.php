<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("coordonneeX")
     */
    private $latitude;

    /**
     * @var string
     * @SerializedName("coordonneeY")
     */
    private $longitude;

    /**
     * @var integer
     */
    private $radius;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Zone
     */
    private $zone;


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
     * Set zone
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $zone
     * @return Point
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
}
