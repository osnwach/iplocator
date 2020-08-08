<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ipinfotable */

$this->title = 'Create Ipinfotable';
$this->params['breadcrumbs'][] = ['label' => 'Ipinfotables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipinfotable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
