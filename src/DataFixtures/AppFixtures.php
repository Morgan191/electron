<?php

namespace App\DataFixtures;

use App\Entity\AncienMembre;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }


    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory:: create();

        //for ($i = 0; $i<10; $i++){

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Lefebvre");
       $ancienMembre->setPrenom("Camille");
       $ancienMembre->setEcole("ENSAM ParisTech");
       $ancienMembre->setCursus("Ingénierie Mécanique");
       $ancienMembre->setSpecialite("Fabrication additive (impression 3D métal)");
       $ancienMembre->setDureeCursus("4 ans");
       $ancienMembre->setThemeRecherche("Impression 3D métal pour prothèses médicales");
       $ancienMembre->setPrixAnnee("Prix Jeune Ingénieur Arts et Métiers (2022)");
       $ancienMembre->setThemeActuel("Biomécanique et implants imprimés en 3D");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Nguyen");
       $ancienMembre->setPrenom("Thomas");
       $ancienMembre->setEcole("Télécom Paris");
       $ancienMembre->setCursus("Informatique et Réseaux");
       $ancienMembre->setSpecialite("Objets connectés (IoT)");
       $ancienMembre->setDureeCursus("3 ans");
       $ancienMembre->setThemeRecherche("Capteurs connectés pour serre intelligente");
       $ancienMembre->setPrixAnnee("Trophée IoT France (2021)");
       $ancienMembre->setThemeActuel("Systèmes autonomes pour agriculture de précision");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Dubois");
       $ancienMembre->setPrenom("Marie");
       $ancienMembre->setEcole("ENSCI - Les Ateliers");
       $ancienMembre->setCursus("Design Industriel");
       $ancienMembre->setSpecialite("Prototypage rapide");
       $ancienMembre->setDureeCursus("4 ans");
       $ancienMembre->setThemeRecherche("Design de mobilier en matériaux recyclés");
       $ancienMembre->setPrixAnnee("Prix Design Durable ENSCI (2023)");
       $ancienMembre->setThemeActuel("Écodesign et économie circulaire");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Martins");
       $ancienMembre->setPrenom("Lucas");
       $ancienMembre->setEcole("IUT de Cachan");
       $ancienMembre->setCursus("Génie Électrique et Informatique Industrielle (GEI...");
       $ancienMembre->setSpecialite("Automatisation");
       $ancienMembre->setDureeCursus("3 ans");
       $ancienMembre->setThemeRecherche("Automatisation d’un bras robotisé open-source");
       $ancienMembre->setPrixAnnee("Prix Jeune Ingénieur Arts et Métiers (2020)");
       $ancienMembre->setThemeActuel("Robotique accessible pour les makers");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Haddad");
       $ancienMembre->setPrenom("Sarah");
       $ancienMembre->setEcole("Sciences des matériaux");
       $ancienMembre->setCursus("Université de Strasbourg");
       $ancienMembre->setSpecialite("Polymères biosourcés");
       $ancienMembre->setDureeCursus("4 ans");
       $ancienMembre->setThemeRecherche("Développement de filaments bio pour imprimantes");
       $ancienMembre->setPrixAnnee("Bourse CNRS Innovation (2023)");
       $ancienMembre->setThemeActuel("Matériaux biosourcés pour impression 3D");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Girard");
       $ancienMembre->setPrenom("Antoine");
       $ancienMembre->setEcole("Centrale Lyon");
       $ancienMembre->setCursus("Énergie et Environnement");
       $ancienMembre->setSpecialite("Systèmes solaires DIY");
       $ancienMembre->setDureeCursus("3 ans");
       $ancienMembre->setThemeRecherche("Microcentrale solaire pour site isolé");
       $ancienMembre->setPrixAnnee("Prix Énergie Jeune Ingénieur (2022)");
       $ancienMembre->setThemeActuel("Energies renouvelables open hardware");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Bencheik");
       $ancienMembre->setPrenom("Ilyes");
       $ancienMembre->setEcole("Epitech");
       $ancienMembre->setCursus("Développement logiciel");
       $ancienMembre->setSpecialite("Interfaces homme-machine (IHM)");
       $ancienMembre->setDureeCursus("4 ans");
       $ancienMembre->setThemeRecherche("Interfaces tactiles pour les déficients visuels");
       $ancienMembre->setPrixAnnee("Hackathon Accessibilité Paris (2021)");
       $ancienMembre->setThemeActuel("Accessibilité numérique et IA");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Rousseau");
       $ancienMembre->setPrenom("Alice");
       $ancienMembre->setEcole("ENSAD");
       $ancienMembre->setCursus("Design d’espace");
       $ancienMembre->setSpecialite("Fabrication bois numérique (CNC)");
       $ancienMembre->setDureeCursus("3 ans");
       $ancienMembre->setThemeRecherche("Mobilier modulaire en contreplaqué découpé CNC");
       $ancienMembre->setPrixAnnee("Prix Énergie Jeune Ingénieur (2021)");
       $ancienMembre->setThemeActuel("Architecture paramétrique DIY");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Diallo");
       $ancienMembre->setPrenom("Mamadou");
       $ancienMembre->setEcole("INSA Toulouse");
       $ancienMembre->setCursus("Génie Mécanique");
       $ancienMembre->setSpecialite("Modélisation CAO / SolidWorks");
       $ancienMembre->setDureeCursus("4 ans");
       $ancienMembre->setThemeRecherche("Boîtier de test moteur imprimé en 3D");
       $ancienMembre->setPrixAnnee("Prix du Meilleur Projet Étudiant INSA (2022)");
       $ancienMembre->setThemeActuel("Simulation mécanique embarquée");
       $manager->persist($ancienMembre);

       $ancienMembre = new AncienMembre();
       $ancienMembre->setNom("Bernard");
       $ancienMembre->setPrenom("Chloé");
       $ancienMembre->setEcole("Université de Bordeaux");
       $ancienMembre->setCursus("Physique Appliquée");
       $ancienMembre->setSpecialite("Laser et découpe numérique");
       $ancienMembre->setDureeCursus("3 ans");
       $ancienMembre->setThemeRecherche("Optimisation des découpes laser");
       $ancienMembre->setPrixAnnee("Trophée IoT France (2020)");
       $ancienMembre->setThemeActuel("Photonique appliquée à la microfabrication");
       $manager->persist($ancienMembre);
       // }

       $user = new User;
       $user->setEmail("user@gmail.com");
       $user->setNom($faker->name);
       $user->setPrenom($faker->firstname);
       $user->setPassword($this->userPasswordHasher->hashPassword($user, "123"));
       $user->setRoles(['ROLE_USER']);
       $manager->persist($user);


        $manager->flush();
    }
}
