<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refposisijabatan */

$this->title = 'Create Referensi Posisi Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Posisi Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refposisijabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
