<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202135238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert_planning ADD CONSTRAINT FK_EBB6A397B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_EBB6A397B7970CF8 ON concert_planning (artist_id)');
        $this->addSql('ALTER TABLE faq CHANGE category category VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert_planning DROP FOREIGN KEY FK_EBB6A397B7970CF8');
        $this->addSql('DROP INDEX IDX_EBB6A397B7970CF8 ON concert_planning');
        $this->addSql('ALTER TABLE faq CHANGE category category INT NOT NULL');
    }
}
