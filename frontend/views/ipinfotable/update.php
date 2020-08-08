<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ipinfotable */

$this->title = 'Update Ipinfotable: ' . ' ' . $model->sno;
$this->params['breadcrumbs'][] = ['label' => 'Ipinfotables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sno, 'url' => ['view', 'id' => $model->sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipinfotable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
