<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Searchedip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="searchedip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ipaddress')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'searchdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
