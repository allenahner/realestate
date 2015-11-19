<?php

namespace app\components;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class OActiveRecord extends ActiveRecord
{

    public function getAttr($attribute_name)
    {
        return !is_null($this->$attribute_name) ? $this->$attribute_name : null;
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_time', 'update_time'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ],
                'value' => function () {
                        return new Expression('NOW()');
                }
            ],
        ];
    }
}