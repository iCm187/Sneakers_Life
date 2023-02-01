<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230201105423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD sneakers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E667BCCF31A FOREIGN KEY (sneakers_id) REFERENCES sneakers (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E667BCCF31A ON article (sneakers_id)');
        $this->addSql('ALTER TABLE user ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497294869C ON user (article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E667BCCF31A');
        $this->addSql('DROP INDEX UNIQ_23A0E667BCCF31A ON article');
        $this->addSql('ALTER TABLE article DROP sneakers_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497294869C');
        $this->addSql('DROP INDEX IDX_8D93D6497294869C ON user');
        $this->addSql('ALTER TABLE user DROP article_id');
    }
}
