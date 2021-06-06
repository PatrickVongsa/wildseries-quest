<?php


namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
<<<<<<< HEAD
        'Comedie',
=======
        'Fantastique',
>>>>>>> d563b8d15caa25f5056c4357f6d83024ed3be495
        'Horreur',
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
<<<<<<< HEAD
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
=======

            $manager->persist($category);
>>>>>>> d563b8d15caa25f5056c4357f6d83024ed3be495
        }
        
        $manager->flush();
    }
}