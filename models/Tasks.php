<?php
//create a child class of ActiveRecord to get data from db
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Tasks extends ActiveRecord
{
  
  public static function tableName()
    {
        return '{{tasks}}';
    }
}
 ?>
