<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarjenispembiayaan */

$this->title = 'Create Referensi Seminar Jenis Pembiayaan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Seminar Jenis Pembiayaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-seminar-jenis-pembiayaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
