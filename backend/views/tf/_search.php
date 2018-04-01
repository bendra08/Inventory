<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tf-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_servis') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'bukti_transfer') ?>

    <?= $form->field($model, 'nominal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
