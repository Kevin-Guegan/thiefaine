<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 */
class Groupe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var boolean
     */
    private $gerergroupes;

    /**
     * @var boolean
     */
    private $gererutilisateurs;

    /**
     * @var boolean
     */
    private $gereralertes;

    /**
     * @var boolean
     */
    private $gererinfos;

    /**
     * @var boolean
     */
    private $gererconseils;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Gendarmerie
     */
    private $idgendarmerie;


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
     * @return Groupe
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
     * Set gerergroupes
     *
     * @param boolean $gerergroupes
     * @return Groupe
     */
    public function setGerergroupes($gerergroupes)
    {
        $this->gerergroupes = $gerergroupes;

        return $this;
    }

    /**
     * Get gerergroupes
     *
     * @return boolean 
     */
    public function getGerergroupes()
    {
        return $this->gerergroupes;
    }

    /**
     * Set gererutilisateurs
     *
     * @param boolean $gererutilisateurs
     * @return Groupe
     */
    public function setGererutilisateurs($gererutilisateurs)
    {
        $this->gererutilisateurs = $gererutilisateurs;

        return $this;
    }

    /**
     * Get gererutilisateurs
     *
     * @return boolean 
     */
    public function getGererutilisateurs()
    {
        return $this->gererutilisateurs;
    }

    /**
     * Set gereralertes
     *
     * @param boolean $gereralertes
     * @return Groupe
     */
    public function setGereralertes($gereralertes)
    {
        $this->gereralertes = $gereralertes;

        return $this;
    }

    /**
     * Get gereralertes
     *
     * @return boolean 
     */
    public function getGereralertes()
    {
        return $this->gereralertes;
    }

    /**
     * Set gererinfos
     *
     * @param boolean $gererinfos
     * @return Groupe
     */
    public function setGererinfos($gererinfos)
    {
        $this->gererinfos = $gererinfos;

        return $this;
    }

    /**
     * Get gererinfos
     *
     * @return boolean 
     */
    public function getGererinfos()
    {
        return $this->gererinfos;
    }

    /**
     * Set gererconseils
     *
     * @param boolean $gererconseils
     * @return Groupe
     */
    public function setGererconseils($gererconseils)
    {
        $this->gererconseils = $gererconseils;

        return $this;
    }

    /**
     * Get gererconseils
     *
     * @return boolean 
     */
    public function getGererconseils()
    {
        return $this->gererconseils;
    }

    /**
     * Set idgendarmerie
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Gendarmerie $idgendarmerie
     * @return Groupe
     */
    public function setIdgendarmerie(\Thiefaine\ReferentielBundle\Entity\Gendarmerie $idgendarmerie = null)
    {
        $this->idgendarmerie = $idgendarmerie;

        return $this;
    }

    /**
     * Get idgendarmerie
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Gendarmerie 
     */
    public function getIdgendarmerie()
    {
        return $this->idgendarmerie;
    }
}
