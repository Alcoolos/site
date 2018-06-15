<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180615203411 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__produit AS SELECT id, name, type, "desc", notemoy, imglink FROM produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('CREATE TABLE produit (id INTEGER NOT NULL, name VARCHAR(100) NOT NULL COLLATE BINARY, type VARCHAR(100) NOT NULL COLLATE BINARY, "desc" VARCHAR(1000) NOT NULL COLLATE BINARY, notemoy DOUBLE PRECISION DEFAULT NULL, imglink VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO produit (id, name, type, "desc", notemoy, imglink) SELECT id, name, type, "desc", notemoy, imglink FROM __temp__produit');
        $this->addSql('DROP TABLE __temp__produit');
        $this->addSql('DROP INDEX IDX_11BA68CFB88E14F');
        $this->addSql('DROP INDEX IDX_11BA68C4FD8F9C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__notes AS SELECT id, produit_id_id, utilisateur_id, note FROM notes');
        $this->addSql('DROP TABLE notes');
        $this->addSql('CREATE TABLE notes (id INTEGER NOT NULL, produit_id_id INTEGER DEFAULT NULL, utilisateur_id INTEGER DEFAULT NULL, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id), CONSTRAINT FK_11BA68C4FD8F9C3 FOREIGN KEY (produit_id_id) REFERENCES produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_11BA68CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO notes (id, produit_id_id, utilisateur_id, note) SELECT id, produit_id_id, utilisateur_id, note FROM __temp__notes');
        $this->addSql('DROP TABLE __temp__notes');
        $this->addSql('CREATE INDEX IDX_11BA68CFB88E14F ON notes (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_11BA68C4FD8F9C3 ON notes (produit_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_11BA68C4FD8F9C3');
        $this->addSql('DROP INDEX IDX_11BA68CFB88E14F');
        $this->addSql('CREATE TEMPORARY TABLE __temp__notes AS SELECT id, produit_id_id, utilisateur_id, note FROM notes');
        $this->addSql('DROP TABLE notes');
        $this->addSql('CREATE TABLE notes (id INTEGER NOT NULL, produit_id_id INTEGER DEFAULT NULL, utilisateur_id INTEGER DEFAULT NULL, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO notes (id, produit_id_id, utilisateur_id, note) SELECT id, produit_id_id, utilisateur_id, note FROM __temp__notes');
        $this->addSql('DROP TABLE __temp__notes');
        $this->addSql('CREATE INDEX IDX_11BA68C4FD8F9C3 ON notes (produit_id_id)');
        $this->addSql('CREATE INDEX IDX_11BA68CFB88E14F ON notes (utilisateur_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__produit AS SELECT id, name, type, "desc", imglink, notemoy FROM produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('CREATE TABLE produit (id INTEGER NOT NULL, name VARCHAR(100) NOT NULL, type VARCHAR(100) NOT NULL, "desc" VARCHAR(1000) NOT NULL, notemoy DOUBLE PRECISION DEFAULT NULL, imglink VARCHAR(255) NOT NULL COLLATE BINARY, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO produit (id, name, type, "desc", imglink, notemoy) SELECT id, name, type, "desc", imglink, notemoy FROM __temp__produit');
        $this->addSql('DROP TABLE __temp__produit');
    }
}
