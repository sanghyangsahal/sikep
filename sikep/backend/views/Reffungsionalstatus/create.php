<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Reffungsionalstatus */

$this->title = 'Create Referensi Fungsional Status';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
