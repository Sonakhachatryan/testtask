<?php

use yii\db\Migration;

/**
 * Class m171108_102914_update_user_table
 */
class m171108_102914_update_user_table extends Migration
{
    /**
     * @inheritdoc
     */
//    public function safeUp()
//    {
//
//    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171108_102914_update_user_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropIndex('username', 'user');
        $this->addColumn('user', 'token','VARCHAR(255)');
        $this->addColumn('user', 'social_id','VARCHAR(255)')->unique();
        $this->addColumn('user', 'role','INT(1)')->defaultValue(0);
    }

    public function down()
    {
        echo "m171108_102914_update_user_table cannot be reverted.\n";

        return false;
    }

}
