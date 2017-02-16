<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Tasks;

//Task model should
class Task extends Tasks
{
  public function Create()
  {
    //create task function here
  }
  public function Edit()
  {
    //edit task function here
  }
  public function Delete()
  {
    //Delete task function here
  }
  public function Show()
  {
    //show task function here
    return $tasks = Task::find()->asArray()->all();

    // получаем строку с первичным ключом "US"
    //$country = tasks::findOne('1');

    // отобразит "United States"
    //$idkey = $country->id;
    //return $idkey;
    // меняем имя страны на "U.S.A." и сохраняем в базу данных
    //$country->name = 'U.S.A.';
    //$country->save();
  }
}

 ?>
