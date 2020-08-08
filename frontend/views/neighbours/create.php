<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Neighbours */

$this->title = 'Create Neighbours';
$this->params['breadcrumbs'][] = ['label' => 'Neighbours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neighbours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
