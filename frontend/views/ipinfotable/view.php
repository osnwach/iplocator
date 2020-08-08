<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ipinfotable */

$this->title = $model->sno;
$this->params['breadcrumbs'][] = ['label' => 'Ipinfotables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipinfotable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sno], [
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
            'sno',
            'ipaddress',
            'continent',
            'country',
            'flagimage',
            'city',
            'equator_relative',
            'timezone',
            'recdate',
        ],
    ]) ?>

</div>
