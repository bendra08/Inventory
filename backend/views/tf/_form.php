<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_servis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'bukti_transfer')->fileinput() ?>
	

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
