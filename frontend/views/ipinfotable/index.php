<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IpinfotableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ipinfotables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipinfotable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ipinfotable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sno',
            'ipaddress',
            'continent',
            'country',
            'flagimage',
            // 'city',
            // 'equator_relative',
            // 'timezone',
            // 'recdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
