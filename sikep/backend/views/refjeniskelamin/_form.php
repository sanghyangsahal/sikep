<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniskelamin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tref-jeniskelamin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamajenisKelamin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
