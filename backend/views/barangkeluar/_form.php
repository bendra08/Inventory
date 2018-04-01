<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Barang;
/* @var $this yii\web\View */
/* @var $model backend\models\Barangkeluar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangkeluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'kode_barang')->label('Nama Barang')
    ->dropDownList(ArrayHelper::map(Barang::find()->asArray()->all(),'kode_barang','nama_barang'),['prompt'=>'- Pilih -',
    'onchange' => '
    $.post("index.php?r=barang/lists&id=' . '"+$(this).val(),
                   function(data){
                var b = $("#barangkeluar-harga").val(data);
                   });'])
   ->hint('Pilih Barang keluar'); ?>
   
    <?= $form->field($model, 'Jumlah')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'Tanggal')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:300px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
