<?php

namespace Thiefaine\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateurweb
 */
class Utilisateurweb extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $nom;

    /**
     * @var string
     */
    protected $prenom;

    /**
     * @var string
     */
    protected $infos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $conseils;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $informations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $zones;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->conseils = new \Doctrine\Common\Collections\ArrayCollection();
        $this->informations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->zones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateurweb
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateurweb
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set infos
     *
     * @param string $infos
     * @return Utilisateurweb
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Add conseils
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Conseil $conseils
     * @return Utilisateurweb
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

    /**
     * Add informations
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Information $informations
     * @return Utilisateurweb
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
     * Add zones
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $zones
     * @return Utilisateurweb
     */
    public function addZone(\Thiefaine\ReferentielBundle\Entity\Zone $zones)
    {
        $this->zones[] = $zones;

        return $this;
    }

    /**
     * Remove zones
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Zone $zones
     */
    public function removeZone(\Thiefaine\ReferentielBundle\Entity\Zone $zones)
    {
        $this->zones->removeElement($zones);
    }

    /**
     * Get zones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZones()
    {
        return $this->zones;
    }

}
