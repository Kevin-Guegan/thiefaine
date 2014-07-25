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
    protected $messages;

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
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add messages
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $messages
     * @return Utilisateurweb
     */
    public function addMessage(\Thiefaine\ReferentielBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $messages
     */
    public function removeMessage(\Thiefaine\ReferentielBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
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

    public function setGroups(\Thiefaine\UserBundle\Entity\Group $group){
        $this->addGroup($group);
        return $this;
    }

}
