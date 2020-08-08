<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NeighboursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Neighbours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neighbours-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Neighbours', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sno',
            'country',
            'neighbour',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
