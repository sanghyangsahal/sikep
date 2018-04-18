<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefhukumandisiplinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-hukuman-disiplin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idHukumanDisiplin') ?>

    <?= $form->field($model, 'NamaHukumanDisiplin') ?>

    <?= $form->field($model, 'TingkatHukumanDisiplin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
