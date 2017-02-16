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
  public function Edit($id)
  {
    //edit task function here
    //return $edit = Tasks::findOne($id);
    return $edit = Tasks::find($id)->all();
  }
  public function DeleteTask($data)
  {
    //Delete task function here
    $del = Tasks::findOne($data);
    $del->delete();
  }
  public function Show()
  {
    //show task function here
    return $tasks = Tasks::find()->asArray()->all();
  }
}

 ?>
