<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813141658 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresseclient VARCHAR(255) NOT NULL, emailclient VARCHAR(255) NOT NULL, telephoneclient VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, cni VARCHAR(255) NOT NULL, datenaissance VARCHAR(255) NOT NULL, salaireclient VARCHAR(255) NOT NULL, nomemployeur VARCHAR(255) DEFAULT NULL, raisonsocial VARCHAR(255) DEFAULT NULL, telephoneemploy VARCHAR(255) DEFAULT NULL, adresseemploy VARCHAR(255) DEFAULT NULL, ninea VARCHAR(255) DEFAULT NULL, emailemploy VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, numagence INT NOT NULL, numcompte INT NOT NULL, clerib INT NOT NULL, date_ouverture DATE NOT NULL, montant_initial VARCHAR(255) NOT NULL, frais_ouverture VARCHAR(255) NOT NULL, agios VARCHAR(255) DEFAULT NULL, date_bloquage DATE DEFAULT NULL, date_debloquage DATE DEFAULT NULL, INDEX IDX_CFF6526019EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526019EB6921');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE compte');
    }
}
