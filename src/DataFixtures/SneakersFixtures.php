<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Sneakers;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SneakerFixtures extends Fixture
{

    public const SNEAKERS = [
        [],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SNEAKERS as $sneakerData) {
            $sneaker = new Sneakers();
            $sneaker->setName($sneakerData['nom']);
            $sneaker->setGender($sneakerData['genre']);
            $sneaker->setStyle($sneakerData['style']);
            $sneaker->setImages($sneakerData['url']);
            $sneaker->setBrand($this->getReference('brand_'));
            $manager->persist($sneaker);
        }
        $manager->flush();
    }
}
