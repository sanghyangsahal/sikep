<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefAlasanpensiun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-alasanpensiun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AlasanPensiun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
