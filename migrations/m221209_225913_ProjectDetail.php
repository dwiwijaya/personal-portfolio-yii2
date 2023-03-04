<?php

use yii\db\Migration;

/**
 * Class m221209_225913_ProjectDetail
 */
class m221209_225913_ProjectDetail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("project_detail", [
            'idproject'   => $this->string(50),
            'date'        => $this->string(11),
            'background'  => $this->string(225),
            'description' => $this->text(),
            'img'         => $this->string(125)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221209_225913_ProjectDetail cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221209_225913_ProjectDetail cannot be reverted.\n";

        return false;
    }
    */
}
