<!--View for delete task-->
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Task;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->dropDownList(ArrayHelper::map(Task::find()->All(), 'id', 'task_name')) ?>


    <div class="form-group">
        <?= Html::submitButton('Delete', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
