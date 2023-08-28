<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814191709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE exercise_storage_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE exercise_storage (id INT NOT NULL, title VARCHAR(400) NOT NULL, category VARCHAR(200) NOT NULL, subcategory VARCHAR(200) NOT NULL, description VARCHAR(400) DEFAULT NULL, file_path VARCHAR(500) NOT NULL, is_locked BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE exercise_storage_id_seq CASCADE');
        $this->addSql('DROP TABLE exercise_storage');
    }
}
