<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefdiklatkualifikasikelulusanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatkualifikasikelulusan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdDiklatKualifikasiLulusan') ?>

    <?= $form->field($model, 'NamaKualifikasiLulusan') ?>

    <?= $form->field($model, 'UrutanKualifikasiLulusan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
