<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Status Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refstatuspegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'StatusPegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
