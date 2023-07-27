<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Libelle;
use App\Entity\Plat;
use App\Entity\Utilisteur;
use App\Entity\Detail;
use App\Entity\Commande;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $libelle1 = new Libelle () ;

        $libelle1->setlibelle("test");
        $libelle1->setimage("asian_food_cat.jpg");
        $libelle1->setactive(true);

        $manager->persist($libelle1);

        $libelle2 = new Libelle () ;

        $libelle2->setlibelle("test");
        $libelle2->setimage("burger_cat.jpg");
        $libelle2->setactive(true);
        
        $manager->persist($libelle2);

        $plat1 = new  Plat() ;

        $plat1->setlibelle("test");
        $plat1->setdescription("blabalbla");
        $plat1->setprix(150);
        $plat1->setimage("food-Name-433.jpeg");
        $plat1->setactive(true);

        $manager->persist($plat1);

        $plat2 = new  Plat() ;

        $plat2->setlibelle("école42");
        $plat2->setdescription("la piscine");
        $plat2->setprix(3000);
        $plat2->setimage("pizza-salmon.png");
        $plat2->setactive(true);

        $manager->persist($plat2);

        // $plat1->setLibelle($libelle1); doesn't work because of the name 
        // $plat2->setLibelle($libelle1);

        $libelle1->addPlat($plat1);
        $libelle2->addPlat($plat2);
        
        $manager->flush();


    }
}
