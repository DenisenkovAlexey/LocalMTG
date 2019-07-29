<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password') ?>
<?= $form->field($model, 'password_repeat') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

