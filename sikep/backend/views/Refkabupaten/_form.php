<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiKabupaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-kabupaten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaKabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodeKabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idPropinsi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
