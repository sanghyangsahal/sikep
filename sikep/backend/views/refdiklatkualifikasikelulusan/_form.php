<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkualifikasikelulusan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatkualifikasikelulusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaKualifikasiLulusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UrutanKualifikasiLulusan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
