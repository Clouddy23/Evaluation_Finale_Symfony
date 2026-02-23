<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260223175848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE payment_method (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, payment_method VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, transaction_user DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE "transaction" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, transaction_user DATETIME NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE payment_method');
        $this->addSql('DROP TABLE "transaction"');
    }
}
