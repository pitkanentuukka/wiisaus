<?php

use yii\db\Migration;

class m160408_031228_create_article extends Migration
{
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
			'parent' => $this->integer(),
			'title' => $this->string()->notNull(),
			'content' => $this->string()->notNull(),
			'timestamp' => $this->timestamp(),
        ]);
    }

    public function down()
    {
        $this->dropTable('article');
    }
}
