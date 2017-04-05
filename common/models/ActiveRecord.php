<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "t_article_category".
 *
 * @property integer $article_category_id
 * @property string $category_name
 * @property integer $created_at
 */
class ActiveRecord extends \yii\db\ActiveRecord
{

}
