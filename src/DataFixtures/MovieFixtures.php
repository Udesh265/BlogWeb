<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setName('The Holly shit');
        $movie->setReleaseDate('2011');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2022/04/18/16/20/animal-7140980_960_720.jpg');

        //for Movie_Actor pivot table push data 
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);



        $movie2 = new Movie();
        $movie2->setName('The dark night fuck');
        $movie2->setReleaseDate('2008');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/04/18/16/20/animal-7140980_960_720.jpg');
        //for Movie_Actor pivot table push data 
        $movie->addActor($this->getReference('actor_3'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setName('The Joke film dorp');
        $movie3->setReleaseDate('2004');
        $movie3->setImagePath('https://cdn.pixabay.com/photo/2022/04/18/16/20/animal-7140980_960_720.jpg');
        //for Movie_Actor pivot table push data 
        $movie->addActor($this->getReference('actor_3'));
        $movie->addActor($this->getReference('actor_1'));
        $manager->persist($movie3);

        $manager->flush();
    }
}
