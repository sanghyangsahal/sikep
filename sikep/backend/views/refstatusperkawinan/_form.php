<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefStatusperkawinan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-statusperkawinan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namaStatusKawin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
