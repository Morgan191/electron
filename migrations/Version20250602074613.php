<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602074613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE recrutement_id recrutement_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD CONSTRAINT FK_8D93D649FCC7117B FOREIGN KEY (recrutement_id) REFERENCES recrutement (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_8D93D649FCC7117B ON user (recrutement_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FCC7117B
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_8D93D649FCC7117B ON user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE recrutement_id recrutement_id INT NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL
        SQL);
    }
}
