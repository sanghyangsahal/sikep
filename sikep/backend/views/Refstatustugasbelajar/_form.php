<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiStatusTugasBelajar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-status-tugas-belajar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaStatusTugasBelajar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
