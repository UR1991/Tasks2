<!-- View for creating new tasks -->

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textinput(['value' => $model->name])->label('name') ?>

    <?= $form->field($model, 'description')->textinput(['value' => $model->description])->label('description') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
