<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiGajiPokok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-gaji-pokok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idGolonganRuang')->textInput() ?>

    <?= $form->field($model, 'Golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MasaKerja')->textInput() ?>

    <?= $form->field($model, 'GajiPokok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
