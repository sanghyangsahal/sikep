<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Reftandajasa */

$this->title = $model->IdTandaJasa;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tanda Jasa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reftandajasa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdTandaJasa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdTandaJasa], [
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
            'IdTandaJasa',
            'NamaTandaJasa',
            'LembagaPemberiTandaJasa',
            'StatusTandaJasa',
            'JenisTandaJasa',
        ],
    ]) ?>

</div>
