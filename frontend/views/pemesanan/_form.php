<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pemesan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pelanggan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pelanggan')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'email_pelanggan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Tlp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paket_id')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
