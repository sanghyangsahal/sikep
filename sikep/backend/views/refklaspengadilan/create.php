<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refklaspengadilan */

$this->title = 'Create Referensi Klas Pengadilan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Klas Pengadilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-klas-pengadilan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
