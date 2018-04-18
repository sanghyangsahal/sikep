<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Warna Kulit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refwarnakulit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaWarnaKulit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
