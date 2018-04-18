<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefseminarjenispembiayaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tref-seminar-jenis-pembiayaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdJenisPembiayaanSeminar') ?>

    <?= $form->field($model, 'KodeJenisPembiayaanSeminar') ?>

    <?= $form->field($model, 'NamaJenisPembiayaanSeminar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
