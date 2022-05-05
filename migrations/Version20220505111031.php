<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505111031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE action (id INT AUTO_INCREMENT NOT NULL, commission_id_id INT NOT NULL, date_debut DATE NOT NULL, duree TIME NOT NULL, INDEX IDX_47CC8C9231058CC4 (commission_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE action_user (action_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_FB726D479D32F035 (action_id), INDEX IDX_FB726D47A76ED395 (user_id), PRIMARY KEY(action_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commission (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dine (id INT AUTO_INCREMENT NOT NULL, nb_invites INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dine_user (dine_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BD0687887E943B25 (dine_id), INDEX IDX_BD068788A76ED395 (user_id), PRIMARY KEY(dine_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diner (id INT AUTO_INCREMENT NOT NULL, prix INT NOT NULL, date DATETIME DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction_commission (fonction_id INT NOT NULL, commission_id INT NOT NULL, INDEX IDX_4D469D8257889920 (fonction_id), INDEX IDX_4D469D82202D1EB2 (commission_id), PRIMARY KEY(fonction_id, commission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction_user (fonction_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_F8A9981557889920 (fonction_id), INDEX IDX_F8A99815A76ED395 (user_id), PRIMARY KEY(fonction_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscrit (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscrit_user (inscrit_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_C2602F716DCD4FEE (inscrit_id), INDEX IDX_C2602F71A76ED395 (user_id), PRIMARY KEY(inscrit_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscrit_action (inscrit_id INT NOT NULL, action_id INT NOT NULL, INDEX IDX_943235226DCD4FEE (inscrit_id), INDEX IDX_943235229D32F035 (action_id), PRIMARY KEY(inscrit_id, action_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parraine (id INT AUTO_INCREMENT NOT NULL, amis_parraine_id INT DEFAULT NULL, INDEX IDX_2371A5FAEF1F4E0D (amis_parraine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parraine_user (parraine_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_431D729F2A603A13 (parraine_id), INDEX IDX_431D729FA76ED395 (user_id), PRIMARY KEY(parraine_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telFixe VARCHAR(10) NOT NULL, telPortable VARCHAR(10) NOT NULL, numeroAdresse INT NOT NULL, villeAdresse VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C9231058CC4 FOREIGN KEY (commission_id_id) REFERENCES commission (id)');
        $this->addSql('ALTER TABLE action_user ADD CONSTRAINT FK_FB726D479D32F035 FOREIGN KEY (action_id) REFERENCES action (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE action_user ADD CONSTRAINT FK_FB726D47A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dine_user ADD CONSTRAINT FK_BD0687887E943B25 FOREIGN KEY (dine_id) REFERENCES dine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dine_user ADD CONSTRAINT FK_BD068788A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fonction_commission ADD CONSTRAINT FK_4D469D8257889920 FOREIGN KEY (fonction_id) REFERENCES fonction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fonction_commission ADD CONSTRAINT FK_4D469D82202D1EB2 FOREIGN KEY (commission_id) REFERENCES commission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fonction_user ADD CONSTRAINT FK_F8A9981557889920 FOREIGN KEY (fonction_id) REFERENCES fonction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fonction_user ADD CONSTRAINT FK_F8A99815A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscrit_user ADD CONSTRAINT FK_C2602F716DCD4FEE FOREIGN KEY (inscrit_id) REFERENCES inscrit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscrit_user ADD CONSTRAINT FK_C2602F71A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscrit_action ADD CONSTRAINT FK_943235226DCD4FEE FOREIGN KEY (inscrit_id) REFERENCES inscrit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscrit_action ADD CONSTRAINT FK_943235229D32F035 FOREIGN KEY (action_id) REFERENCES action (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parraine ADD CONSTRAINT FK_2371A5FAEF1F4E0D FOREIGN KEY (amis_parraine_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE parraine_user ADD CONSTRAINT FK_431D729F2A603A13 FOREIGN KEY (parraine_id) REFERENCES parraine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parraine_user ADD CONSTRAINT FK_431D729FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action_user DROP FOREIGN KEY FK_FB726D479D32F035');
        $this->addSql('ALTER TABLE inscrit_action DROP FOREIGN KEY FK_943235229D32F035');
        $this->addSql('ALTER TABLE action DROP FOREIGN KEY FK_47CC8C9231058CC4');
        $this->addSql('ALTER TABLE fonction_commission DROP FOREIGN KEY FK_4D469D82202D1EB2');
        $this->addSql('ALTER TABLE dine_user DROP FOREIGN KEY FK_BD0687887E943B25');
        $this->addSql('ALTER TABLE fonction_commission DROP FOREIGN KEY FK_4D469D8257889920');
        $this->addSql('ALTER TABLE fonction_user DROP FOREIGN KEY FK_F8A9981557889920');
        $this->addSql('ALTER TABLE inscrit_user DROP FOREIGN KEY FK_C2602F716DCD4FEE');
        $this->addSql('ALTER TABLE inscrit_action DROP FOREIGN KEY FK_943235226DCD4FEE');
        $this->addSql('ALTER TABLE parraine_user DROP FOREIGN KEY FK_431D729F2A603A13');
        $this->addSql('ALTER TABLE action_user DROP FOREIGN KEY FK_FB726D47A76ED395');
        $this->addSql('ALTER TABLE dine_user DROP FOREIGN KEY FK_BD068788A76ED395');
        $this->addSql('ALTER TABLE fonction_user DROP FOREIGN KEY FK_F8A99815A76ED395');
        $this->addSql('ALTER TABLE inscrit_user DROP FOREIGN KEY FK_C2602F71A76ED395');
        $this->addSql('ALTER TABLE parraine DROP FOREIGN KEY FK_2371A5FAEF1F4E0D');
        $this->addSql('ALTER TABLE parraine_user DROP FOREIGN KEY FK_431D729FA76ED395');
        $this->addSql('DROP TABLE action');
        $this->addSql('DROP TABLE action_user');
        $this->addSql('DROP TABLE commission');
        $this->addSql('DROP TABLE dine');
        $this->addSql('DROP TABLE dine_user');
        $this->addSql('DROP TABLE diner');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE fonction_commission');
        $this->addSql('DROP TABLE fonction_user');
        $this->addSql('DROP TABLE inscrit');
        $this->addSql('DROP TABLE inscrit_user');
        $this->addSql('DROP TABLE inscrit_action');
        $this->addSql('DROP TABLE parraine');
        $this->addSql('DROP TABLE parraine_user');
        $this->addSql('DROP TABLE user');
    }
}
