<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Searchedip */

$this->title = 'Create Searchedip';
$this->params['breadcrumbs'][] = ['label' => 'Searchedips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="searchedip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
