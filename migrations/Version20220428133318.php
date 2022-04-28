<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428133318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE parraine (id INT AUTO_INCREMENT NOT NULL, amis_parraine_id INT DEFAULT NULL, INDEX IDX_2371A5FAEF1F4E0D (amis_parraine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parraine_user (parraine_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_431D729F2A603A13 (parraine_id), INDEX IDX_431D729FA76ED395 (user_id), PRIMARY KEY(parraine_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parraine ADD CONSTRAINT FK_2371A5FAEF1F4E0D FOREIGN KEY (amis_parraine_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE parraine_user ADD CONSTRAINT FK_431D729F2A603A13 FOREIGN KEY (parraine_id) REFERENCES parraine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parraine_user ADD CONSTRAINT FK_431D729FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parraine_user DROP FOREIGN KEY FK_431D729F2A603A13');
        $this->addSql('DROP TABLE parraine');
        $this->addSql('DROP TABLE parraine_user');
    }
}
