<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2018/8/23
 * Time: 14:59
 */

namespace app\models;


use creocoder\nestedsets\NestedSetsBehavior;
use yii\db\ActiveRecord;

class Classify extends ActiveRecord
{
//    public $leftAttribute = "left_key";
//    public $rightAttribute = "right_key";


    public function behaviors()
    {
        return [
            'tree' => [
                'class' => NestedSetsBehavior::className(),
//                 'leftAttribute' => 'left_key',
//                 'rightAttribute' => 'right_key',
                'depthAttribute' => 'depth',
            ],
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public static function find()
    {
        return new ClassifyQuery(get_called_class());
    }
}