<?php

use yii\db\Migration;

class m170609_115051_account extends Migration
{
    public function safeUp()
    {
        $this->createTable('account', [
            'id' => $this->primaryKey(),
            'email' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'api_key' => $this->string(255)->notNull()->unique(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('account');
    }
}
