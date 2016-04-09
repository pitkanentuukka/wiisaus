<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $title
 * @property string $content
 * @property string $timestamp
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['title', 'content'], 'required'],
            [['timestamp'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent' => 'Parent',
            'title' => 'Title',
            'content' => 'Content',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @inheritdoc
     * @return ArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }
}
