<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_servis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6])?>

  
     <?= $form->field($model, 'bukti_transfer')->fileinput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
