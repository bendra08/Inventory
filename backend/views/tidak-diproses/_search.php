<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TidakDiprosesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tidak-diproses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengadaan') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'jumlah_barang') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'harga_barang') ?>

    <?php // echo $form->field($model, 'Keterangan') ?>

    <?php // echo $form->field($model, 'status_pengadaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
