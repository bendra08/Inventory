<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cradit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cradit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_valid')->textInput() ?>

    <?= $form->field($model, 'cvv')->textInput() ?>

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
