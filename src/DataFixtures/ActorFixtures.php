<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Jone devidson');
        $manager->persist($actor);

        $actor2 = new Actor();
        $actor2->setName('Jone devidson');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('Kwure jahsan');
        $manager->persist($actor3);

        $manager->flush();

        //for data push into pivot table
        $this->addReference('actor_1', $actor);
        $this->addReference('actor_2', $actor2);
        $this->addReference('actor_3', $actor3);
    }
}
