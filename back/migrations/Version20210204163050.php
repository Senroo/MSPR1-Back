<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210204163050 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist_meeting DROP FOREIGN KEY FK_425ABF0EB7970CF8');
        $this->addSql('ALTER TABLE artist_meeting ADD CONSTRAINT FK_425ABF0EB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist_meeting DROP FOREIGN KEY FK_425ABF0EB7970CF8');
        $this->addSql('ALTER TABLE artist_meeting ADD CONSTRAINT FK_425ABF0EB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
    }
}
