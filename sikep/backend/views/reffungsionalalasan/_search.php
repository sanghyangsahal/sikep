<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReffungsionalalasanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reffungsionalalasan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdRefFungsionalAlasan') ?>

    <?= $form->field($model, 'IdStatusFungsional') ?>

    <?= $form->field($model, 'NamaRefFungsionalAlasan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
