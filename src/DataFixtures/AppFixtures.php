<?php

namespace App\DataFixtures;

use App\Entity\AncienMembre;
use App\Entity\AncienMembreMeta;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $ancienMembre = new AncienMembre;
            $ancienMembre->setNom("Lefebvre");
            $ancienMembre->setPrenom("Camille");
            $ancienMembre->setecole("ENSAM ParisTech");
            $ancienMembre->setCursus("Ingénieur Mécanique");
            $ancienMembre->setSpecialite("Fabrication additive (impression 3D métal)");
            $manager->persist($ancienMembre);
        

        
            $ancienMembreMeta = new AncienMembreMeta;
            $ancienMembreMeta->setAncienMembre($ancienMembre);
            $ancienMembreMeta->setDureeCursus("4");
            $ancienMembreMeta->setThemeRecherche("Impression 3D métal pour prothèses médicales");
            $ancienMembreMeta->setPrixAnnee("Prix Jeune Ingénieur Arts et Métiers (2022)");
            $ancienMembreMeta->setThemeActuel("Biomécanique et implants imprimés en 3D");
            $manager->persist($ancienMembreMeta);
        }
        $manager->flush();
    }
}
