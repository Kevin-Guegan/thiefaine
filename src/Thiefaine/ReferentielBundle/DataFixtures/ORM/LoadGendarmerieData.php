<?php

namespace Thiefaine\ReferentielBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Thiefaine\ReferentielBundle\Entity\Gendarmerie;

class LoadGendarmerieData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$defaultGendarmerie = new Gendarmerie();
		$defaultGendarmerie->setLibelle('gendarmerie 35');

		$em->persist($defaultGendarmerie);
		$em->flush();

		$this->addReference('gendarmerie-defaultGendarmerie', $defaultGendarmerie);
	}

	public function getOrder()
	{
		return 1;
	}
}