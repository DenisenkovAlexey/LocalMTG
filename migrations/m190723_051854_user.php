<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190723_051854_user
 */
class m190723_051854_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        echo "m190723_051854_user cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $this->createTable('user',[
                'id' => Schema::TYPE_PK,
                'username' => Schema::TYPE_STRING,
                'hash' => Schema::TYPE_STRING,
                'auth_key' => Schema::TYPE_STRING,
                'token' =>Schema::TYPE_STRING,
            ]
            );

    }

    public function down()
    {
        echo "m190723_051854_user cannot be reverted.\n";
        $this->dropTable('user');
    }
}
