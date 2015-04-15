<?php

namespace Thiefaine\ReferentielBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Thiefaine\ReferentielBundle\Entity\Ensemble;

class LoadEnsembleData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$defaultEnsemble = new Ensemble();
		$defaultEnsemble->setLibelle('ensemble default');

		$em->persist($defaultEnsemble);
		$em->flush();

		$this->addReference('ensemble-defaultEnsemble', $defaultEnsemble);
	}

	public function getOrder()
	{
		return 1;
	}
}