<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220928064533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circle (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, radius INT NOT NULL, surface INT NOT NULL, circumference INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE triangle (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, a INT NOT NULL, b INT NOT NULL, c INT NOT NULL, surface INT NOT NULL, circumference INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE circle');
        $this->addSql('DROP TABLE triangle');
    }
}
