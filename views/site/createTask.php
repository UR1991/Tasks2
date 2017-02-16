<!-- View for creating new tasks -->
<!--<div class="site-index">

    <form action="site/create">
      <input type="text"></input>
      <input type="text"></input>
      <input type="submit"></input>
    </form>

    </div>
</div>
-->
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
