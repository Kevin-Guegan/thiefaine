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
     * @var \Thiefaine\ReferentielBundle\Entity\AppGroup
     */
    private $appgroup;


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
     * @param \Thiefaine\ReferentielBundle\Entity\AppGroup $appgroup
     * @return Group
     */
    public function setAppGroup(\Thiefaine\ReferentielBundle\Entity\AppGroup $appgroup = null)
    {
        $this->appgroup = $appgroup;

        return $this;
    }

    /**
     * Get gendarmerie
     *
     * @return \Thiefaine\ReferentielBundle\Entity\AppGroup 
     */
    public function getAppGroup()
    {
        return $this->appgroup;
    }
}
