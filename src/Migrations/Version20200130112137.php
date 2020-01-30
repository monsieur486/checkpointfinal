<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200130112137 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE circuit (id INT AUTO_INCREMENT NOT NULL, date_presentation DATE NOT NULL, ville VARCHAR(255) NOT NULL, places INT NOT NULL, slug VARCHAR(255) NOT NULL, adresse01 VARCHAR(255) NOT NULL, adresse02 VARCHAR(255) DEFAULT NULL, codepostal VARCHAR(10) NOT NULL, longitude NUMERIC(16, 13) NOT NULL, latitude NUMERIC(16, 13) NOT NULL, resume LONGTEXT NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE numero (id INT AUTO_INCREMENT NOT NULL, actif TINYINT(1) NOT NULL, horaire TIME NOT NULL, titre VARCHAR(255) NOT NULL, resume LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, semaine_enfant NUMERIC(5, 2) NOT NULL, semaine_adulte NUMERIC(5, 2) NOT NULL, weekend_enfant NUMERIC(5, 2) NOT NULL, weekend_adulte NUMERIC(5, 2) NOT NULL, semaine_groupe NUMERIC(5, 2) NOT NULL, weekend_groupe NUMERIC(5, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE circuit');
        $this->addSql('DROP TABLE numero');
        $this->addSql('DROP TABLE tarif');
    }
}
