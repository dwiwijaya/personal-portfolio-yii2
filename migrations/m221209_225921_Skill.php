<?php

use yii\db\Migration;

/**
 * Class m221209_225921_Skill
 */
class m221209_225921_Skill extends Migration
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
        if (!in_array('skills', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%skills}}', [
                    'idskill' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`idskill`)',
                    'name' => 'VARCHAR(20) NULL',
                    'svg' => 'VARCHAR(125) NULL',
                    'order' => 'INT(11) NULL',
                    'type' => 'VARCHAR(11) NOT NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%skills}}', ['idskill' => '1', 'name' => 'HTML', 'svg' => 'html5.svg', 'order' => '1', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '2', 'name' => 'CSS', 'svg' => 'css3.svg', 'order' => '2', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '3', 'name' => 'Bootstrap', 'svg' => 'bootstrap.svg', 'order' => '3', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '4', 'name' => 'Tailwind', 'svg' => 'tailwind.svg', 'order' => '4', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '5', 'name' => 'JS', 'svg' => 'js.svg', 'order' => '5', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '6', 'name' => 'JQuery', 'svg' => 'jquery.svg', 'order' => '6', 'type' => 'fe']);
        $this->insert('{{%skills}}', ['idskill' => '7', 'name' => 'Yii2', 'svg' => 'yii2.svg', 'order' => '1', 'type' => 'be']);
        $this->insert('{{%skills}}', ['idskill' => '8', 'name' => 'Ci3', 'svg' => 'ci.svg', 'order' => '2', 'type' => 'be']);
        $this->insert('{{%skills}}', ['idskill' => '9', 'name' => 'Git', 'svg' => 'git.svg', 'order' => '3', 'type' => 'be']);
        $this->insert('{{%skills}}', ['idskill' => '10', 'name' => 'MySQL', 'svg' => 'mysql.svg', 'order' => '4', 'type' => 'be']);
        $this->insert('{{%skills}}', ['idskill' => '11', 'name' => 'PgSQL', 'svg' => 'pgsql.svg', 'order' => '5', 'type' => 'be']);
        $this->insert('{{%skills}}', ['idskill' => '12', 'name' => 'Oracle', 'svg' => 'oracle.svg', 'order' => '6', 'type' => 'be']);
        $this->execute('SET foreign_key_checks = 1;');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `skills`');
        $this->execute('SET foreign_key_checks = 1;');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225921_Skill cannot be reverted.\n";

        return false;
    }
    */
}
