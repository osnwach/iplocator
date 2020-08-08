<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchedipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Searchedips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="searchedip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Searchedip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sno',
            'ipaddress',
            'country',
            'searchdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
