<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IpinfotableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ipinfotable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sno') ?>

    <?= $form->field($model, 'ipaddress') ?>

    <?= $form->field($model, 'continent') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'flagimage') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'equator_relative') ?>

    <?php // echo $form->field($model, 'timezone') ?>

    <?php // echo $form->field($model, 'recdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
