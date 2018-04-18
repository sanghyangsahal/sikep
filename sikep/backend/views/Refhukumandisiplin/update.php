<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiHukumanDisiplin */

$this->title = 'Update Referensi Hukuman Disiplin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hukuman Disiplin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idHukumanDisiplin, 'url' => ['view', 'id' => $model->idHukumanDisiplin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-hukuman-disiplin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
