<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RefjurusanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refjurusan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdJurusan') ?>

    <?= $form->field($model, 'KodeJurusan') ?>

    <?= $form->field($model, 'NamaJurusan') ?>

    <?= $form->field($model, 'idTingkatPendidikan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
