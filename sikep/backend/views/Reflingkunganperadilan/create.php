<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiLingkunganPeradilan */

$this->title = 'Create Referensi Lingkungan Peradilan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lingkungan Peradilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-lingkungan-peradilan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
