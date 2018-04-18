<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarjenispembiayaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tref-seminar-jenis-pembiayaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KodeJenisPembiayaanSeminar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaJenisPembiayaanSeminar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
