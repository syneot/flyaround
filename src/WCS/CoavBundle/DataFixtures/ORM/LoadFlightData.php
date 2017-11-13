<?php

namespace WCS\CoavBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use WCS\CoavBundle\Entity\PlaneModel;

class LoadUserData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $flightAdmin = new PlaneModel();
        $flightAdmin->setIsAvailable(1);
        $flightAdmin->setCruiseSpeed(230);
        $flightAdmin->setManufacturer('BOEING');
        $flightAdmin->setModel('777');

        $manager->persist($flightAdmin);
        $manager->flush();
}
}