<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refposisijabatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refposisijabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodePosisiJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LevelPosisiJabatan')->textInput() ?>

    <?= $form->field($model, 'UrutanPosisiJabatan')->textInput() ?>

    <?= $form->field($model, 'NamaPosisiJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KeteranganPosisiJabatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
