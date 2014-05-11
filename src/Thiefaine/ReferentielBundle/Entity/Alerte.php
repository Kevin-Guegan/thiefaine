<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 *
 * @ORM\Table(name="ALERTE", indexes={@ORM\Index(name="ALERTE_MESSAGE_ID1", columns={"idmessage"}), @ORM\Index(name="ALERTE_ZONE_ID1", columns={"idzone"})})
 * @ORM\Entity
 */
class Alerte
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
     * @var \Message
     *
     * @ORM\ManyToOne(targetEntity="Message")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmessage", referencedColumnName="id")
     * })
     */
    private $idmessage;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idmessage
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $idmessage
     * @return Alerte
     */
    public function setIdmessage(\Thiefaine\ReferentielBundle\Entity\Message $idmessage = null)
    {
        $this->idmessage = $idmessage;

        return $this;
    }

    /**
     * Get idmessage
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Message 
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * Set idzone
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $idzone
     * @return Alerte
     */
    public function setIdzone(\Thiefaine\ReferentielBundle\Entity\Zone $idzone = null)
    {
        $this->idzone = $idzone;

        return $this;
    }

    /**
     * Get idzone
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Zone 
     */
    public function getIdzone()
    {
        return $this->idzone;
    }
}
