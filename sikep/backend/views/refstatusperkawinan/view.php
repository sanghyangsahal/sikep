<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RefStatusperkawinan */

$this->title = $model->idStatusKawin;
$this->params['breadcrumbs'][] = ['label' => 'Ref Statusperkawinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-statusperkawinan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idStatusKawin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idStatusKawin], [
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
            'idStatusKawin',
            'namaStatusKawin',
        ],
    ]) ?>

</div>
