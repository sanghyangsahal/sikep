<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refhubungankeluarga */

$this->title = $model->IdHubunganKeluarga;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hubungan Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refhubungankeluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdHubunganKeluarga], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdHubunganKeluarga], [
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
            'IdHubunganKeluarga',
            'JenisHubunganKeluarga',
        ],
    ]) ?>

</div>
