<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202134748 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artist_concert_planning');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist_concert_planning (artist_id INT NOT NULL, concert_planning_id INT NOT NULL, INDEX IDX_54C6C925B7970CF8 (artist_id), INDEX IDX_54C6C9253935923D (concert_planning_id), PRIMARY KEY(artist_id, concert_planning_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE artist_concert_planning ADD CONSTRAINT FK_54C6C9253935923D FOREIGN KEY (concert_planning_id) REFERENCES concert_planning (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artist_concert_planning ADD CONSTRAINT FK_54C6C925B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
    }
}
