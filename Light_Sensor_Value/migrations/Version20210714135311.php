<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210714135311 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE symfony_app_users');
        $this->addSql('ALTER TABLE light_sensor CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE Timestamp timestamp DATETIME NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE symfony_app_users (id INT NOT NULL, username VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(254) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, is_active TINYINT(1) NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE light_sensor MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE light_sensor DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE light_sensor CHANGE id id INT NOT NULL, CHANGE timestamp Timestamp DATETIME DEFAULT \'current_timestamp(6)\' NOT NULL');
    }
}
