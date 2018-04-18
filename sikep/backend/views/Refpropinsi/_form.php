<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiPropinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-propinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaPropinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdPulau')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
