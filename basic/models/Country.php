<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    //如果和数据库表名没有对应上，可以通过重写这个方法覆写表名
    public static function tableName()
    {
        return '{{COUNTRY}}';
    }

}