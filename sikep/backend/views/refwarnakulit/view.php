<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Warna Kulit */

$this->title = $model->IdWarnaKulit;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Warna Kulit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refwarnakulit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdWarnaKulit], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdWarnaKulit], [
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
            'IdWarnaKulit',
            'NamaWarnaKulit',
        ],
    ]) ?>

</div>
