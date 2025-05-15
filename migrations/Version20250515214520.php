<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250515214520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE recrutement_etape2 (id INT AUTO_INCREMENT NOT NULL, id_recrutement INT NOT NULL, date_naissance DATE NOT NULL, adresse LONGTEXT NOT NULL, téléphone INT NOT NULL, nationalité VARCHAR(50) NOT NULL, école_actuelle VARCHAR(100) NOT NULL, nom_cursus VARCHAR(100) NOT NULL, spécialité VARCHAR(50) NOT NULL, date_entrée_cursus DATE NOT NULL, année_cursus INT NOT NULL, carte_étudiant LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE rerutement_etape2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recrutement_etape3 ADD cv_filename VARCHAR(255) DEFAULT NULL, ADD video_filename VARCHAR(255) DEFAULT NULL, DROP cv, DROP vidéo_présentation, CHANGE id_recrutement_etape_2 etape2_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recrutement_etape3 ADD CONSTRAINT FK_D73D9F436CF4D18A FOREIGN KEY (etape2_id) REFERENCES recrutement_etape2 (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D73D9F436CF4D18A ON recrutement_etape3 (etape2_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE recrutement_etape3 DROP FOREIGN KEY FK_D73D9F436CF4D18A
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE rerutement_etape2 (id INT AUTO_INCREMENT NOT NULL, id_recrutement INT NOT NULL, date_naissance DATE NOT NULL, adresse LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, téléphone INT NOT NULL, nationalité VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, école_actuelle VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nom_cursus VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, spécialité VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_entrée_cursus DATE NOT NULL, année_cursus INT NOT NULL, carte_étudiant LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recrutement_etape2
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D73D9F436CF4D18A ON recrutement_etape3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recrutement_etape3 ADD cv LONGBLOB NOT NULL, ADD vidéo_présentation LONGBLOB NOT NULL, DROP cv_filename, DROP video_filename, CHANGE etape2_id id_recrutement_etape_2 INT NOT NULL
        SQL);
    }
}
