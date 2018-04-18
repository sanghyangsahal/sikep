<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiUniversitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-universitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdTingkatPendidikan')->textInput() ?>

    <?= $form->field($model, 'IdNegara')->textInput() ?>

    <?= $form->field($model, 'KodeUniversitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaUniversitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DeskripsiUniversitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SingkatanUniversitas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
