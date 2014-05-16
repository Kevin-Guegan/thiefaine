<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Point
 *
 * @ORM\Table(name="POINT", indexes={@ORM\Index(name="IDX_40F13194732431A7", columns={"idzone"})})
 * @ORM\Entity
 */
class Point
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
     * @ORM\Column(name="radius", type="integer", nullable=false)
     */
    private $radius;

    /**
     * @var \Zone
     *
     * @ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idzone", referencedColumnName="id")
     * })
     */
    private $idzone;


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
