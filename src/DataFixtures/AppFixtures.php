<?php

namespace App\DataFixtures;

use App\Entity\Listing;
use App\Repository\ListingRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{

    public function __construct(ListingRepository $listingrepository)
    {
        $this->listingRepo = $listingrepository;
    }

    public function load(ObjectManager $manager): void
    {

        // Je crée les données liés à mes artistes
        $listings = [
            'PS4' => [
                'title' => 'PS4',
                'description' => 'Hello i am selling my old ps4 from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'console',
                'img' => 'ps4.jpg',
                'published_at' => new \DateTime("2017-06-15"),
            ],
            'XBOX' => [
                'title' => 'XBOX',
                'description' => 'Hello i am selling my old xbox from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'console',
                'img' => 'xbox.jpg',
                'published_at' => new \DateTime("2018-06-15"),
            ],
            'Switch' => [
                'title' => 'Switch',
                'description' => 'Hello i am selling my old switch from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'console',
                'img' => 'switch.jgp',
                'published_at' => new \DateTime("2019-06-15"),
            ],
            'Lego Star Wars Game ps4' => [
                'title' => 'Lego Star Wars Game ps4',
                'description' => 'Hello i am selling my old Lego Star Wars Game ps4 from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'game',
                'img' => 'legostarwars.jgp',
                'published_at' => new \DateTime("2019-06-15"),
            ],
            'Halo 5 for xbox' => [
                'title' => 'Halo 5 for xbox',
                'description' => 'Hello i am selling my old Halo 5 for xbox from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'game',
                'img' => 'halo.jgp',
                'published_at' => new \DateTime("2020-06-15"),
            ],
            'Breath of the wild for switch' => [
                'title' => 'Breath of the wild for switch',
                'description' => 'Hello i am selling my old Breath of the wild for switch from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'game',
                'img' => 'botw.jgp',
                'published_at' => new \DateTime("2021-06-15"),
            ],
            'Dancepad' => [
                'title' => 'Dancepad',
                'description' => 'Hello i am selling my old Dancepad from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'accessory',
                'img' => 'dancepad.jgp',
                'published_at' => new \DateTime("2018-09-25"),
            ],
            'Occulus Rift' => [
                'title' => 'Occulis Rift',
                'description' => 'Hello i am selling my old Occulus Rift from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'accessory',
                'img' => 'occulus.jgp',
                'published_at' => new \DateTime("2019-09-25"),
            ],
            'Kinect' => [
                'title' => 'Kinect',
                'description' => 'Hello i am selling my old Kinect from 5 years ago alongside 10 games which are: bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
                'category' => 'accessory',
                'img' => 'kinect.jgp',
                'published_at' => new \DateTime("2020-09-25"),
            ],
        ];

        foreach ($listings as $listing) {
            
            $a = new Listing();

            // 2ème option pour hydrater automatiquement
            foreach ($listing as $key => $value) {
                // je crée un setter avec la concaténation de 'set' + la clé avec la première lettre en majuscule
                $setter = "set" . ucfirst($key);
                // j'utilise ce setter avec la valeur 
                $a->$setter($value);
            }

            // Je persit à chaque tour de boucle un artist
            $manager->persist($a);

        }
        $manager->flush();
    }
}
