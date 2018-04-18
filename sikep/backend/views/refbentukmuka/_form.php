<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Bentuk Muka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refbentukmuka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namaBentukMuka')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
