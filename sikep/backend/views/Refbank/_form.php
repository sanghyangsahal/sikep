<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiBank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-bank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaBank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KodeBank')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
