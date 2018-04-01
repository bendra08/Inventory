<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker; 
use yii\helpers\ArrayHelper;
use backend\models\Stokminimum;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengadaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-form">

    <?php $form = ActiveForm::begin(); ?>

  <?php echo $form->field($model, 'id_pengadaan')->label('Nama Barang')
    ->dropDownList(ArrayHelper::map(Stokminimum::find()->asArray()->all(),'kode_barang','nama_barang'),['prompt'=>'- Pilih -'])
    ->hint('Pilih Barang'); ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

<?= $form->field($model,'Tanggal')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?> 


    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Ajukan Barang', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
