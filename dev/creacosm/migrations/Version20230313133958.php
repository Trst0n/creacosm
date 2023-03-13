<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313133958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sondage ADD introduction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sondage ADD visibilite BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE sondage ADD datecreation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE statistique ADD sondage_id INT NOT NULL');
        $this->addSql('ALTER TABLE statistique ADD CONSTRAINT FK_73A038ADBAF4AE56 FOREIGN KEY (sondage_id) REFERENCES sondage (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_73A038ADBAF4AE56 ON statistique (sondage_id)');
        $this->addSql('ALTER TABLE utilisateur ADD genre VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD datedenaissance TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE utilisateur DROP genre');
        $this->addSql('ALTER TABLE utilisateur DROP datedenaissance');
        $this->addSql('ALTER TABLE sondage DROP introduction');
        $this->addSql('ALTER TABLE sondage DROP visibilite');
        $this->addSql('ALTER TABLE sondage DROP datecreation');
        $this->addSql('ALTER TABLE statistique DROP CONSTRAINT FK_73A038ADBAF4AE56');
        $this->addSql('DROP INDEX IDX_73A038ADBAF4AE56');
        $this->addSql('ALTER TABLE statistique DROP sondage_id');
    }
}
