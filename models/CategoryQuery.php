<?php
/**
 * Created by PhpStorm.
 * User: hackil
 * Date: 4/19/15
 * Time: 9:34 PM
 */
namespace app\models;
use creocoder\nestedsets\NestedSetsQueryBehavior;


class CategoryQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}