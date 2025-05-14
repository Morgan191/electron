<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250513210430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE ancien_membre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prénom VARCHAR(50) NOT NULL, école VARCHAR(50) NOT NULL, cursus VARCHAR(100) NOT NULL, spécialité VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ancien_membre_meta (id INT AUTO_INCREMENT NOT NULL, id_anciens_membres INT NOT NULL, durée_cursus VARCHAR(10) NOT NULL, thème_recherche VARCHAR(50) NOT NULL, prix_année VARCHAR(50) NOT NULL, thème_actuel VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE recrutement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prénom VARCHAR(50) NOT NULL, email VARCHAR(150) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE recrutement_etape3 (id INT AUTO_INCREMENT NOT NULL, id_recrutement_etape_2 INT NOT NULL, sujet_recherche LONGTEXT NOT NULL, cv LONGBLOB NOT NULL, vidéo_présentation LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE rerutement_etape2 (id INT AUTO_INCREMENT NOT NULL, id_recrutement INT NOT NULL, date_naissance DATE NOT NULL, adresse LONGTEXT NOT NULL, téléphone INT NOT NULL, nationalité VARCHAR(50) NOT NULL, école_actuelle VARCHAR(100) NOT NULL, nom_cursus VARCHAR(100) NOT NULL, spécialité VARCHAR(50) NOT NULL, date_entrée_cursus DATE NOT NULL, année_cursus INT NOT NULL, carte_étudiant LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE ancien_membre
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ancien_membre_meta
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recrutement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recrutement_etape3
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE rerutement_etape2
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
