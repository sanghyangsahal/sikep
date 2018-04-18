<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefkomposisihakimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refkomposisihakim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdKomposisiHakim') ?>

    <?= $form->field($model, 'KodeSatkerKomposisiHakim') ?>

    <?= $form->field($model, 'MinimalJumlahKomposisiHakim') ?>

    <?= $form->field($model, 'MaksimalJumlahKomposisiHakim') ?>

    <?= $form->field($model, 'BalancingScoreKomposisiHakim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
