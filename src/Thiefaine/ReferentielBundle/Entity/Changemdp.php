<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Changemdp
 */
class Changemdp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var boolean
     */
    private $update;

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
     * Set hash
     *
     * @param string $hash
     * @return Changemdp
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set update
     *
     * @param boolean $update
     * @return Changemdp
     */
    public function setUpdate($update)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Get update
     *
     * @return boolean 
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set idutilisateurweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $idutilisateurweb
     * @return Changemdp
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
