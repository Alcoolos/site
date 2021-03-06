<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180303160456 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE produit ADD COLUMN notemoy DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__produit AS SELECT id, name, type, "desc", imglink FROM produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('CREATE TABLE produit (id INTEGER NOT NULL, name VARCHAR(100) NOT NULL, type VARCHAR(100) NOT NULL, "desc" VARCHAR(1000) NOT NULL, imglink VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO produit (id, name, type, "desc", imglink) SELECT id, name, type, "desc", imglink FROM __temp__produit');
        $this->addSql('DROP TABLE __temp__produit');
    }
}
