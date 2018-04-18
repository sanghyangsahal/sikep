<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Diklat Fungsional */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatfungsional-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaJenisDiklatFungsional')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
