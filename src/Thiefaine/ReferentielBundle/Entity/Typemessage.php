<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typemessage
 *
 * @ORM\Table(name="TYPEMESSAGE")
 * @ORM\Entity
 */
class Typemessage
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Typemessage
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
     * Add messages
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Message $messages
     * @return Typemessage
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
}
