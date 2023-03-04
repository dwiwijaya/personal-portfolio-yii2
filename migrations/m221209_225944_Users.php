<?php

use yii\db\Migration;

/**
 * Class m221209_225944_Users
 */
class m221209_225944_Users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("users", [
            'iduser'   => $this->primaryKey(11),
            'username' => $this->string(30),
            'password' => $this->string(225),
            'name'     => $this->string(50),
            'authKey'  => $this->string(30)
        ]);

        $this->insert("users",[
            'username' => '11Dwiwijaya',
            'password' => '123',
            'name'     => 'Dwi Wijaya'
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221209_225944_Users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225944_Users cannot be reverted.\n";

        return false;
    }
    */
}
