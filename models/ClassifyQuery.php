<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2018/8/23
 * Time: 16:50
 */

namespace app\models;


use creocoder\nestedsets\NestedSetsQueryBehavior;
use yii\db\ActiveQuery;

class ClassifyQuery extends ActiveQuery
{
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}