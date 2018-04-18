<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefdiklatperjenjanganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refdiklatperjenjangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idDiklatPerjenjangan') ?>

    <?= $form->field($model, 'levelDiklatPerjenjangan') ?>

    <?= $form->field($model, 'namaDiklatPerjenjangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
