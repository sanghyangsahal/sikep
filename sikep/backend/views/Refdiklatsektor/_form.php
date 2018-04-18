<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiDiklatSektor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-diklat-sektor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaDiklatSektor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
