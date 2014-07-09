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

}
