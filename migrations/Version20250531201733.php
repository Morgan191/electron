<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250531201733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       /* $this->addSql(<<<'SQL'
            ALTER TABLE recrutement CHANGE mot_de_passe password VARCHAR(255) NOT NULL
        SQL);*/
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       /* $this->addSql(<<<'SQL'
            ALTER TABLE recrutement CHANGE password mot_de_passe VARCHAR(255) NOT NULL
        SQL);*/
    }
}
