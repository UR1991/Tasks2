<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Tasks;

//Task model should
class Task extends Tasks
{
  public function Create($name, $description)
  {
    
    //create task function here
    $newTask = new Tasks();
    //$newTask->task_name = $name;
    //$newTask->task_description = $description;
    $newTask->task_name = $name;
    $newTask->task_description = $description;
    $newTask->save();
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
    return $tasks = Tasks::find()->asArray()->all();
  }
}

 ?>
