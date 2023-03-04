<?php

use yii\db\Migration;

/**
 * Class m221209_225903_Project
 */
class m221209_225903_Project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("projects", [
            'idproject'    => $this->string(50),
            'name'         => $this->string(20),
            'detail'       => $this->string(150),
            'color'        => $this->string(15),
            'architecture' => $this->string(50),
            'order'        => $this->integer(11),

        ]);

        // $this->insert("projects",[
        //     'name' => 'Listme',
        //     'detail' => 'This is a website to management money, i created this because i ',
        //     'color' => '#f5d470',
        //     'architecture' => 'HTML, CSS',
        //     'order' => 1
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221209_225903_Project cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225903_Project cannot be reverted.\n";

        return false;
    }
    */
}
