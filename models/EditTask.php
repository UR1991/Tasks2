<?php
//Model for editTask view

namespace app\models;

use yii\base\Model;

class EditTask extends Model
{
    public $name;
    public $description;
    public $id;

    public function rules()
    {
        return [
            [['name', 'description', 'id'], 'required'],];
    }
}
