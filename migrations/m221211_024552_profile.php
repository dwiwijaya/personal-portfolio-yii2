<?php

use yii\db\Migration;

/**
 * Class m221211_024552_profile
 */
class m221211_024552_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("profile", [
            'greeting'   => $this->string(20),
            'focused' => $this->string(30),
            'about' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221211_024552_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221211_024552_profile cannot be reverted.\n";

        return false;
    }
    */
}
