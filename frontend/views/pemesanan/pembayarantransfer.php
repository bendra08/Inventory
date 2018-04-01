<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Transfer */
/* @var $form yii\widgets\ActiveForm */
?>

<style type="text/css">
    .padding-baru {
        padding: 50px;
    }
    .input {
        background-color:   #1E90FF;
        color: white;
    }
</style>
<p>
<div class="transfer-form thumbnail padding-baru">

    <?php $form = ActiveForm::begin(); ?>

    

  
    <?= $form->field($model, 'nominal')->textInput()->label(false) ?>

    <?= $form->field($model, 'keterangan')->textInput()->label(false) ?>

    <div class="form-group">
        <center><?= Html::submitButton($model->isNewRecord ? '<span class="glyphicon glyphicon-save"></span> Bayar Sekarang' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-default' : 'btn btn-primary']) ?></center>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</p>
