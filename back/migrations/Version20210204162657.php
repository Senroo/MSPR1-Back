<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210204162657 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D22298D193');
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D2B7970CF8');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D22298D193 FOREIGN KEY (stage_id) REFERENCES stage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D2B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D22298D193');
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D2B7970CF8');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D22298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D2B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
    }
}
