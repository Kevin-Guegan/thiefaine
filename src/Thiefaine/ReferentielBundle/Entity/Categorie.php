<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $informations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $conseils;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->informations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->conseils = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set libelle
     *
     * @param string $libelle
     * @return Categorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add informations
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Information $informations
     * @return Categorie
     */
    public function addInformation(\Thiefaine\ReferentielBundle\Entity\Information $informations)
    {
        $this->informations[] = $informations;

        return $this;
    }

    /**
     * Remove informations
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Information $informations
     */
    public function removeInformation(\Thiefaine\ReferentielBundle\Entity\Information $informations)
    {
        $this->informations->removeElement($informations);
    }

    /**
     * Get informations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Add conseils
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Conseil $conseils
     * @return Categorie
     */
    public function addConseil(\Thiefaine\ReferentielBundle\Entity\Conseil $conseils)
    {
        $this->conseils[] = $conseils;

        return $this;
    }

    /**
     * Remove conseils
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Conseil $conseils
     */
    public function removeConseil(\Thiefaine\ReferentielBundle\Entity\Conseil $conseils)
    {
        $this->conseils->removeElement($conseils);
    }

    /**
     * Get conseils
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConseils()
    {
        return $this->conseils;
    }
}
