<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refjenispangkat */

$this->title = 'Create Referensi Jenis Pangkat';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Pangkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenispangkat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
