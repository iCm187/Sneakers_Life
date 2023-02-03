<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BrandFixtures extends Fixture
{
    public const BRANDS = [
        [
            'marque' => 'Nike',
        ],
    ];


    public function load(ObjectManager $manager): void
    {
        foreach (self::BRANDS as $key => $brandData) {
            $brand = new Brand();
            $brand->setName($brandData['marque']);
            $manager->persist($brand);
            $this->addReference('brand_' . $key, $brand);
        }
        $manager->flush();
    }
}
