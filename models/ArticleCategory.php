<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_categories".
 *
 * @property int $id
 * @property int $title
 * @property int $parent_id
 * @property int $public
 */
class ArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'parent_id', 'public'], 'required'],
            [['title', 'parent_id', 'public'], 'integer'],
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
            'parent_id' => 'Parent ID',
            'public' => 'Public',
        ];
    }
}
