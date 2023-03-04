<?php

use yii\db\Migration;

/**
 * Class m221209_225822_Certificate
 */
class m221209_225822_Certificate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("certificates", [
            'idcertificate' => $this->primaryKey(11),
            'name'          => $this->string(50),
            'date'          => $this->string(11),
            'order'         => $this->integer(11),
            'img'           => $this->string(125)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221209_225822_Certificate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225822_Certificate cannot be reverted.\n";

        return false;
    }
    */
}
