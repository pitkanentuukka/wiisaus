<?php

use yii\db\Migration;

class m160409_165408_alter_article_change_content_type extends Migration
{
    public function up()
    {
		$this->alterColumn('article', 'content', 'text');

    }

    public function down()
    {
		$this->alterColumn('article', 'content',  $this->string()->notNull());

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
