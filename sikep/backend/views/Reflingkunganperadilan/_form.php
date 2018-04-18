<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiLingkunganPeradilan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-lingkungan-peradilan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaLingkunganPeradilan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
