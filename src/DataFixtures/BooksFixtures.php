<?php

namespace App\DataFixtures;

use App\Entity\Books;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BooksFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $book = new Books();
            $book
                ->setName('Book ' . $i)
                ->setDescription('Description ' . $i)
                ->setCategoryId(mt_rand(1,10));
            $manager->persist($book);
        }

        $manager->flush();
    }
}
