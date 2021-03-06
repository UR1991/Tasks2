<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
//use app\models\LoginForm;
//use app\models\ContactForm;
use app\models\Task;
use app\models\Tasks;
use app\models\CreateTask;
use app\models\DeleteTask;
use app\models\EditTask;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Task::Show();
        return $this->render('index', ['query' => $query]);
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionCreate()
    {
      $model = new CreateTask();

      $POST_VARIABLE = Yii::$app->request->post('CreateTask');
      $name = $POST_VARIABLE['name'];
      $description = $POST_VARIABLE['description'];

          //try input data
      if ($model->load(Yii::$app->request->post()) && $model->validate()) {

          // go to Task model
          $query = Task::Create($name, $description);
          return $this->render('index', ['query' => $name]);
        }
       else {
          // show this if open first time or error
         return $this->render('createTask', ['model' => $model]);
      }
    }
////////////////////////////
    public function actionEdit()
    {
      $model = new EditTask();

      $POST_VARIABLE = Yii::$app->request->post('EditTask');
      $id = $POST_VARIABLE['id'];
      //$description = $POST_VARIABLE['description'];



      //$id = $POST_VARIABLE['id'];
      if ($id != null) {

          // go to Task model

          $model = Task::Edit($id);

          //$model->name = $id;

          return $this->render('createTask', ['model' => $model]);
        }
       else {
          // show this if open first time or error
          //$query = Task::Show();
         return $this->render('editTask', ['model' => $model]);
      }

    }
/////////////////////////////

    public function actionDelete()
    {
      $model = new DeleteTask();

      $POST_VARIABLE = Yii::$app->request->post('DeleteTask');
      $name = $POST_VARIABLE['name'];

      if ($name != null) {

          // go to Task model
          $query = Task::DeleteTask($name);
          return $this->render('index', ['query' => "Task deleted!"]);
        }
       else {
          // show this if open first time or error
          //$query = Task::Show();
         return $this->render('deleteTask', ['model' => $model]);
      }
    }

    public function actionShow()
    {
        $query = Task::Show();
        return $this->render('index', ['query' => $query]);

    }

}
