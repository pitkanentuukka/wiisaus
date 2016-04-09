<?php

use yii\db\Migration;

class m160409_174202_create_tag extends Migration
{
    public function up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
			'tag' => $this->string()->notNull(),
        ]);
        $this->createTable('tag_article', [
            'tag_id' => $this->integer(),
			'article_id' => $this->integer(),
        ]);
		
		$this->addPrimaryKey('tag_article_pk', 'tag_article', ['tag_id', 'article_id']);


		$this->createIndex(
			'idx_tag_id',
			'tag_article',
			'tag_id');

		$this->createIndex(
			'idx_article_id',
			'tag_article',
			'article_id');


		$this->addForeignKey(
			'fk-tag-article-article-id',
			'tag_article',
			'article_id',
			'article',
			'id',
			'CASCADE');


		$this->addForeignKey(
			'fk-tag-article-tag-id',
			'tag_article',
			'tag_id',
			'tag',
			'id',
			'CASCADE');

    }

    public function down()
    {
		$this->dropForeignKey('fk-tag-article-article-id');
		$this->dropForeignKey('fk-tag-article-tag-id');
		
		$this->dropTable('tag');
        $this->dropTable('tag_article');
		
    }
}
