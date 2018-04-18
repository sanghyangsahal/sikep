<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jabatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UrutanJabatan')->textInput() ?>

    <?= $form->field($model, 'IdPosisiJabatan')->textInput() ?>

    <?= $form->field($model, 'NamaJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SingkatanNamaJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KeteranganNamaJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsiaPensiunJabatan')->textInput() ?>

    <?= $form->field($model, 'MinimumAngaKreditJabatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
