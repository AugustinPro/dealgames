<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420101132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listing ADD title VARCHAR(255) NOT NULL, ADD img VARCHAR(255) NOT NULL, DROP listing_id, DROP listing_title, DROP listing_img, CHANGE listing_desc `desc` LONGTEXT NOT NULL, CHANGE listing_date date DATETIME NOT NULL, CHANGE listing_category category VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listing ADD listing_id INT NOT NULL, ADD listing_title VARCHAR(255) NOT NULL, ADD listing_img VARCHAR(255) NOT NULL, DROP title, DROP img, CHANGE `desc` listing_desc LONGTEXT NOT NULL, CHANGE date listing_date DATETIME NOT NULL, CHANGE category listing_category VARCHAR(20) NOT NULL');
    }
}
