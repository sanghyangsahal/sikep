<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Gaji Tunjangan */

$this->title = 'Create Referensi Gaji Tunjangan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Gaji Tunjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgajitunjangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
