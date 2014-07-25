<?php

namespace Thiefaine\UserBundle\Entity;
use FOS\UserBundle\Model\Group as BaseGroup;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 */
class Group extends BaseGroup
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Gendarmerie
     */
    private $gendarmerie;


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
     * Set gendarmerie
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Gendarmerie $gendarmerie
     * @return Group
     */
    public function setGendarmerie(\Thiefaine\ReferentielBundle\Entity\Gendarmerie $gendarmerie = null)
    {
        $this->gendarmerie = $gendarmerie;

        return $this;
    }

    /**
     * Get gendarmerie
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Gendarmerie 
     */
    public function getGendarmerie()
    {
        return $this->gendarmerie;
    }
}
