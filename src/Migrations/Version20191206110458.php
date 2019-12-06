<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191206110458 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE army (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unit (id INT AUTO_INCREMENT NOT NULL, army_id INT NOT NULL, unit_category_id INT NOT NULL, name VARCHAR(255) NOT NULL, size_min INT NOT NULL, size_max INT NOT NULL, cost_per_figure INT NOT NULL, INDEX IDX_DCBB0C5318D2742D (army_id), INDEX IDX_DCBB0C538921F7C4 (unit_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unit_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unit_category_has_unit_limit (id INT AUTO_INCREMENT NOT NULL, unit_category_id INT NOT NULL, unit_limit_id INT NOT NULL, min INT DEFAULT NULL, max INT DEFAULT NULL, INDEX IDX_CD7A5F8B8921F7C4 (unit_category_id), INDEX IDX_CD7A5F8BD463AB68 (unit_limit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unit_limit (id INT AUTO_INCREMENT NOT NULL, min INT NOT NULL, max INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_army (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, army_id INT NOT NULL, army_points INT NOT NULL, INDEX IDX_76A063FFA76ED395 (user_id), INDEX IDX_76A063FF18D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_army_unit (id INT AUTO_INCREMENT NOT NULL, unit_id INT NOT NULL, user_army_id INT NOT NULL, INDEX IDX_C2746039F8BD700D (unit_id), INDEX IDX_C274603940DF6A27 (user_army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE unit ADD CONSTRAINT FK_DCBB0C5318D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE unit ADD CONSTRAINT FK_DCBB0C538921F7C4 FOREIGN KEY (unit_category_id) REFERENCES unit_category (id)');
        $this->addSql('ALTER TABLE unit_category_has_unit_limit ADD CONSTRAINT FK_CD7A5F8B8921F7C4 FOREIGN KEY (unit_category_id) REFERENCES unit_category (id)');
        $this->addSql('ALTER TABLE unit_category_has_unit_limit ADD CONSTRAINT FK_CD7A5F8BD463AB68 FOREIGN KEY (unit_limit_id) REFERENCES unit_limit (id)');
        $this->addSql('ALTER TABLE user_army ADD CONSTRAINT FK_76A063FFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_army ADD CONSTRAINT FK_76A063FF18D2742D FOREIGN KEY (army_id) REFERENCES army (id)');
        $this->addSql('ALTER TABLE user_army_unit ADD CONSTRAINT FK_C2746039F8BD700D FOREIGN KEY (unit_id) REFERENCES unit (id)');
        $this->addSql('ALTER TABLE user_army_unit ADD CONSTRAINT FK_C274603940DF6A27 FOREIGN KEY (user_army_id) REFERENCES user_army (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unit DROP FOREIGN KEY FK_DCBB0C5318D2742D');
        $this->addSql('ALTER TABLE user_army DROP FOREIGN KEY FK_76A063FF18D2742D');
        $this->addSql('ALTER TABLE user_army_unit DROP FOREIGN KEY FK_C2746039F8BD700D');
        $this->addSql('ALTER TABLE unit DROP FOREIGN KEY FK_DCBB0C538921F7C4');
        $this->addSql('ALTER TABLE unit_category_has_unit_limit DROP FOREIGN KEY FK_CD7A5F8B8921F7C4');
        $this->addSql('ALTER TABLE unit_category_has_unit_limit DROP FOREIGN KEY FK_CD7A5F8BD463AB68');
        $this->addSql('ALTER TABLE user_army DROP FOREIGN KEY FK_76A063FFA76ED395');
        $this->addSql('ALTER TABLE user_army_unit DROP FOREIGN KEY FK_C274603940DF6A27');
        $this->addSql('DROP TABLE army');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE unit');
        $this->addSql('DROP TABLE unit_category');
        $this->addSql('DROP TABLE unit_category_has_unit_limit');
        $this->addSql('DROP TABLE unit_limit');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_army');
        $this->addSql('DROP TABLE user_army_unit');
    }
}
