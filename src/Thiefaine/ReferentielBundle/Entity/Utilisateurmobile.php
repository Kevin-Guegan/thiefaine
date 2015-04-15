<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurmobile
 */
class Utilisateurmobile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idmobile;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Ensemble
     */
    private $ensemble;


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
     * Set idmobile
     *
     * @param string $idmobile
     * @return Utilisateurmobile
     */
    public function setIdmobile($idmobile)
    {
        $this->idmobile = $idmobile;

        return $this;
    }

    /**
     * Get idmobile
     *
     * @return string 
     */
    public function getIdmobile()
    {
        return $this->idmobile;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Utilisateurmobile
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Utilisateurmobile
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set ensemble
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Ensemble $ensemble
     * @return Utilisateurmobile
     */
    public function setensemble(\Thiefaine\ReferentielBundle\Entity\Ensemble $ensemble = null)
    {
        $this->ensemble = $ensemble;

        return $this;
    }

    /**
     * Get ensemble
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Ensemble 
     */
    public function getensemble()
    {
        return $this->ensemble;
    }
}
