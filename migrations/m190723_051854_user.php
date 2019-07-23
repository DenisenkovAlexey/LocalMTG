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
                'id' => $this->primaryKey(11),
                'username' => $this->string(80)->unique(),
                'hash' => $this->string(128),
                'auth_key' => $this->string(32),
                'token' =>$this->string(128),
            ]
            );

    }

    public function down()
    {
        echo "m190723_051854_user cannot be reverted.\n";
        $this->dropTable('user');

    }
}
