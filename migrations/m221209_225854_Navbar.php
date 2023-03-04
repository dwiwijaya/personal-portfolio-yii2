<?php

use yii\db\Migration;

/**
 * Class m221209_225854_Navbar
 */
class m221209_225854_Navbar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('navbars', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%navbars}}', [
                    'idnav' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`idnav`)',
                    'name' => 'VARCHAR(20) NULL',
                    'url' => 'VARCHAR(20) NULL',
                    'type' => 'INT(11) NULL',
                    'order' => 'INT(11) NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%navbars}}', ['idnav' => '12', 'name' => 'HOME', 'url' => '/site/#home', 'type' => '0', 'order' => '1']);
        $this->insert('{{%navbars}}', ['idnav' => '13', 'name' => 'ABOUT', 'url' => '/site/#about', 'type' => '0', 'order' => '2']);
        $this->insert('{{%navbars}}', ['idnav' => '14', 'name' => 'SKILLS', 'url' => '/site/#skills', 'type' => '0', 'order' => '3']);
        $this->insert('{{%navbars}}', ['idnav' => '15', 'name' => 'PROJECTS', 'url' => '/site/#project', 'type' => '0', 'order' => '4']);
        $this->insert('{{%navbars}}', ['idnav' => '16', 'name' => 'HOME', 'url' => '/site/#home', 'type' => '1', 'order' => '1']);
        $this->insert('{{%navbars}}', ['idnav' => '17', 'name' => 'PROFILE', 'url' => '/profile', 'type' => '1', 'order' => '2']);
        $this->insert('{{%navbars}}', ['idnav' => '18', 'name' => 'SKILLS', 'url' => '/skills', 'type' => '1', 'order' => '3']);
        $this->insert('{{%navbars}}', ['idnav' => '19', 'name' => 'PROJECTS', 'url' => '/project', 'type' => '1', 'order' => '4']);
        $this->insert('{{%navbars}}', ['idnav' => '20', 'name' => 'CERTIFICATES', 'url' => '/certificate', 'type' => '1', 'order' => '5']);
        $this->insert('{{%navbars}}', ['idnav' => '21', 'name' => 'SOCIALS', 'url' => '/social', 'type' => '1', 'order' => '6']);
        $this->insert('{{%navbars}}', ['idnav' => '22', 'name' => 'NAVBARS', 'url' => '/navbar', 'type' => '1', 'order' => '7']);
        $this->execute('SET foreign_key_checks = 1;');

        /**
         * {@inheritdoc}
         */
    }
    public function safeDown()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('navbars', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%navbars}}', [
                    'idnav' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`idnav`)',
                    'name' => 'VARCHAR(20) NULL',
                    'url' => 'VARCHAR(20) NULL',
                    'type' => 'INT(11) NULL',
                    'order' => 'INT(11) NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%navbars}}', ['idnav' => '12', 'name' => 'HOME', 'url' => '/site/#home', 'type' => '0', 'order' => '1']);
        $this->insert('{{%navbars}}', ['idnav' => '13', 'name' => 'ABOUT', 'url' => '/site/#about', 'type' => '0', 'order' => '2']);
        $this->insert('{{%navbars}}', ['idnav' => '14', 'name' => 'SKILLS', 'url' => '/site/#skills', 'type' => '0', 'order' => '3']);
        $this->insert('{{%navbars}}', ['idnav' => '15', 'name' => 'PROJECTS', 'url' => '/site/#project', 'type' => '0', 'order' => '4']);
        $this->insert('{{%navbars}}', ['idnav' => '16', 'name' => 'HOME', 'url' => '/site/#home', 'type' => '1', 'order' => '1']);
        $this->insert('{{%navbars}}', ['idnav' => '17', 'name' => 'PROFILE', 'url' => '/profile', 'type' => '1', 'order' => '2']);
        $this->insert('{{%navbars}}', ['idnav' => '18', 'name' => 'SKILLS', 'url' => '/skills', 'type' => '1', 'order' => '3']);
        $this->insert('{{%navbars}}', ['idnav' => '19', 'name' => 'PROJECTS', 'url' => '/project', 'type' => '1', 'order' => '4']);
        $this->insert('{{%navbars}}', ['idnav' => '20', 'name' => 'CERTIFICATES', 'url' => '/certificate', 'type' => '1', 'order' => '5']);
        $this->insert('{{%navbars}}', ['idnav' => '21', 'name' => 'SOCIALS', 'url' => '/social', 'type' => '1', 'order' => '6']);
        $this->insert('{{%navbars}}', ['idnav' => '22', 'name' => 'NAVBARS', 'url' => '/navbar', 'type' => '1', 'order' => '7']);
        $this->execute('SET foreign_key_checks = 1;');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225854_Navbar cannot be reverted.\n";

        return false;
    }
    */
}
