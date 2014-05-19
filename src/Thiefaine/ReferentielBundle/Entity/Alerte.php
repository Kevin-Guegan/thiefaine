<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 *
 * @ORM\Table(name="ALERTE", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_F356B2BC69B96211", columns={"idmessage"}), @ORM\UniqueConstraint(name="UNIQ_F356B2BC732431A7", columns={"idzone"})})
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
     * @var \Zone
     *
     * @ORM\OneToMany(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idzone", referencedColumnName="id")
     * })
     */
    private $idzone;

    /**
     * @var \Message
     *
     * @ORM\OneToOne(targetEntity="Message")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmessage", referencedColumnName="id")
     * })
     */
    private $idmessage;


    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Message
     */
    private $message;

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
     * Set message
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $message
     * @return Alerte
     */
    public function setMessage(\Thiefaine\ReferentielBundle\Entity\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Message 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set zone
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $zone
     * @return Alerte
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
