<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 */
class Alerte
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Message
     */
    private $idmessage;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Zone
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
    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Lieu
     */
    private $idlieu;


    /**
     * Set idlieu
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Lieu $idlieu
     * @return Alerte
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
