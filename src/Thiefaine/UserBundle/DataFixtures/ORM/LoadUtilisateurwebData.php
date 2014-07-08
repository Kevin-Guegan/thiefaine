<?php

namespace Thiefaine\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Thiefaine\UserBundle\Entity\Utilisateurweb;

class LoadUtilisateurwebData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$admin = new Utilisateurweb();
		$admin->setUsername('adminuser');
		$admin->setEmail('admin@admin.user');
        $admin->setPlainPassword('admin');
        $admin->setEnabled(true);

        $roles[] = 'ROLE_SUPER_ADMIN';
        $admin->setRoles($roles);
 
		$em->persist($admin);
		$em->flush();

		$this->addReference('utilisateurweb-admin', $admin);
	}

	public function getOrder()
	{
		return 1;
	}
}