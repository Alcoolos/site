<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180515094444 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_11BA68C4FD8F9C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__notes AS SELECT id, produit_id_id, note FROM notes');
        $this->addSql('DROP TABLE notes');
        $this->addSql('CREATE TABLE notes (id INTEGER NOT NULL, produit_id_id INTEGER DEFAULT NULL, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id), CONSTRAINT FK_11BA68C4FD8F9C3 FOREIGN KEY (produit_id_id) REFERENCES produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO notes (id, produit_id_id, note) SELECT id, produit_id_id, note FROM __temp__notes');
        $this->addSql('DROP TABLE __temp__notes');
        $this->addSql('CREATE INDEX IDX_11BA68C4FD8F9C3 ON notes (produit_id_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_11BA68C4FD8F9C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__notes AS SELECT id, produit_id_id, note FROM notes');
        $this->addSql('DROP TABLE notes');
        $this->addSql('CREATE TABLE notes (id INTEGER NOT NULL, produit_id_id INTEGER DEFAULT NULL, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO notes (id, produit_id_id, note) SELECT id, produit_id_id, note FROM __temp__notes');
        $this->addSql('DROP TABLE __temp__notes');
        $this->addSql('CREATE INDEX IDX_11BA68C4FD8F9C3 ON notes (produit_id_id)');
    }
}
