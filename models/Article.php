<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property int $dir
 * @property string $content
 * @property int $author
 * @property int $public
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'dir', 'content', 'author', 'public'], 'required'],
            [['dir', 'author', 'public'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'dir' => 'Dir',
            'content' => 'Content',
            'author' => 'Author',
            'public' => 'Public',
        ];
    }
}
