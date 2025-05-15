<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250514223450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre ADD prenom VARCHAR(50) NOT NULL, ADD ecole VARCHAR(50) NOT NULL, ADD specialite VARCHAR(50) NOT NULL, DROP prénom, DROP école, DROP spécialité
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre_meta ADD theme_recherche VARCHAR(50) NOT NULL, ADD prix_annee VARCHAR(50) NOT NULL, ADD theme_actuel VARCHAR(50) NOT NULL, DROP thème_recherche, DROP prix_année, DROP thème_actuel, CHANGE id_anciens_membres ancien_membre_id INT NOT NULL, CHANGE durée_cursus duree_cursus VARCHAR(10) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre_meta ADD CONSTRAINT FK_37559EACDBD9E896 FOREIGN KEY (ancien_membre_id) REFERENCES ancien_membre (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_37559EACDBD9E896 ON ancien_membre_meta (ancien_membre_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre ADD prénom VARCHAR(50) NOT NULL, ADD école VARCHAR(50) NOT NULL, ADD spécialité VARCHAR(50) NOT NULL, DROP prenom, DROP ecole, DROP specialite
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre_meta DROP FOREIGN KEY FK_37559EACDBD9E896
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_37559EACDBD9E896 ON ancien_membre_meta
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ancien_membre_meta ADD thème_recherche VARCHAR(50) NOT NULL, ADD prix_année VARCHAR(50) NOT NULL, ADD thème_actuel VARCHAR(50) NOT NULL, DROP theme_recherche, DROP prix_annee, DROP theme_actuel, CHANGE ancien_membre_id id_anciens_membres INT NOT NULL, CHANGE duree_cursus durée_cursus VARCHAR(10) NOT NULL
        SQL);
    }
}
