<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Gaji Tunjangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refgajitunjangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeGajiTunjangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaGajiTunjangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdGajiPokok')->textInput() ?>

    <?= $form->field($model, 'Tunjangan')->textInput() ?>

    <?= $form->field($model, 'RemunisasiGajiTunjangan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
