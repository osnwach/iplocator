<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Neighbours */

$this->title = 'Update Neighbours: ' . ' ' . $model->sno;
$this->params['breadcrumbs'][] = ['label' => 'Neighbours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sno, 'url' => ['view', 'id' => $model->sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="neighbours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
