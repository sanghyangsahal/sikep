<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refklaspengadilan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tref-klas-pengadilan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaKlasPengadilan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
