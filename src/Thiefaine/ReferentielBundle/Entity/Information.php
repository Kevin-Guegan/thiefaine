<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 */
class Information
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $alerte;

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
     * Set alerte
     *
     * @param boolean $alerte
     * @return Information
     */
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return boolean 
     */
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set message
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $message
     * @return Information
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
     * @return Information
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
