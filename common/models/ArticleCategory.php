<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "t_article_category".
 *
 * @property integer $article_category_id
 * @property string $category_name
 * @property integer $created_at
 */
class ArticleCategory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'unique'],
            [['category_name'], 'filter', 'filter' => 'trim', 'skipOnArray' => true], #说明:CFilterValidator 的别名, 使用一个filter转换属性.
            [['created_at'], 'integer'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_category_id' => '分类ID',
            'category_name' => '分类名称',
            'created_at' => '创建时间',
        ];
    }

    /**
     * 自动更新created_at
     * 软删除
     * @return array
     */
    public function behaviors()
    {
        return [
          [
              'class' => TimestampBehavior::className(),
              'createdAtAttribute' => 'created_at',
              'updatedAtAttribute' => false,
              'value' => time(),
          ],
      ];
    }
}
