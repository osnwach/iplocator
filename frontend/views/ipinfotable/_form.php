<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ipinfotable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ipinfotable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ipaddress')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'continent')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'flagimage')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'equator_relative')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'timezone')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'recdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
