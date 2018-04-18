<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiLingkunganPeradilan */

$this->title = $model->idLingkunganPeradilan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lingkungan Peradilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-lingkungan-peradilan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idLingkunganPeradilan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idLingkunganPeradilan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idLingkunganPeradilan',
            'NamaLingkunganPeradilan',
        ],
    ]) ?>

</div>
