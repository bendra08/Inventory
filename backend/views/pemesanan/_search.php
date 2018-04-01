<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pemesan') ?>

    <?= $form->field($model, 'nama_pelanggan') ?>

    <?= $form->field($model, 'alamat_pelanggan') ?>

    <?= $form->field($model, 'email_pelanggan') ?>

    <?= $form->field($model, 'No_Tlp') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'paket_id') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
