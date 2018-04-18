<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refstatusmasaorganisasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refstatusmasaorganisasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaStatusMasaOrganisasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
