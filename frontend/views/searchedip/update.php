<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Searchedip */

$this->title = 'Update Searchedip: ' . ' ' . $model->sno;
$this->params['breadcrumbs'][] = ['label' => 'Searchedips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sno, 'url' => ['view', 'id' => $model->sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="searchedip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
