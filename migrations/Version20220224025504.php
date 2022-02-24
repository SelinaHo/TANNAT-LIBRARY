<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220224025504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE books (id INT AUTO_INCREMENT NOT NULL, category_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(1000) NOT NULL, INDEX IDX_4A1B2A929777D11E (category_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(255) NOT NULL, dob DATE NOT NULL, phone_number VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE renting_history (id INT AUTO_INCREMENT NOT NULL, book_id_id INT NOT NULL, customer_id_id INT NOT NULL, day_rent DATE NOT NULL, day_return DATE NOT NULL, INDEX IDX_484BDBB771868B2E (book_id_id), INDEX IDX_484BDBB7B171EB6C (customer_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE books ADD CONSTRAINT FK_4A1B2A929777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE renting_history ADD CONSTRAINT FK_484BDBB771868B2E FOREIGN KEY (book_id_id) REFERENCES books (id)');
        $this->addSql('ALTER TABLE renting_history ADD CONSTRAINT FK_484BDBB7B171EB6C FOREIGN KEY (customer_id_id) REFERENCES customers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE renting_history DROP FOREIGN KEY FK_484BDBB771868B2E');
        $this->addSql('ALTER TABLE books DROP FOREIGN KEY FK_4A1B2A929777D11E');
        $this->addSql('ALTER TABLE renting_history DROP FOREIGN KEY FK_484BDBB7B171EB6C');
        $this->addSql('DROP TABLE books');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE renting_history');
    }
}
