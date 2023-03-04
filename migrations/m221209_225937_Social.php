<?php

use yii\db\Migration;

/**
 * Class m221209_225937_Social
 */
class m221209_225937_Social extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("socials",[
            'idsocial' => $this->primaryKey(11),
            'name'     => $this->string(20),
            'icon'     => $this->string(20),
            'order'    => $this->integer(11)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221209_225937_Social cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225937_Social cannot be reverted.\n";

        return false;
    }
    */
}
