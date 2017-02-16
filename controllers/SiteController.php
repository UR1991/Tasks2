<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Task;
use app\models\Tasks;
use app\models\CreateTask;

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
      echo "loadEdit";

    }
/////////////////////////////

    public function actionDelete()
    {
        echo "loadDelete";
    }

    public function actionShow()
    {
        $query = Task::Show();
        return $this->render('index', ['query' => $query]);

    }

}
