<?php
//Model for deleteTask view

namespace app\models;

use yii\base\Model;

class DeleteTask extends Model
{
    public $name;

    public function rules()
    {
        return [
            [['name'], 'required'],];
    }
}
