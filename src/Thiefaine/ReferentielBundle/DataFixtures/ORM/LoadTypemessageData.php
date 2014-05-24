<?php

namespace Thiefaine\ReferentielBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Thiefaine\ReferentielBundle\Entity\Typemessage;

class LoadTypemessageData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$conseil = new Typemessage();
		$conseil->setLibelle('conseil');

		$information = new Typemessage();
		$information->setLibelle('information');

		$alerte = new Typemessage();
		$alerte->setLibelle('alerte');

		$em->persist($conseil);
		$em->persist($information);
		$em->persist($alerte);
		$em->flush();

		$this->addReference('typemessage-conseil', $conseil);
		$this->addReference('typemessage-information', $information);
		$this->addReference('typemessage-alerte', $alerte);
	}

	public function getOrder()
	{
		return 1;
	}
}