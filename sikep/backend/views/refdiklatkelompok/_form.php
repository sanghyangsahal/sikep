<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkelompok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatkelompok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaKelompokDiklat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
