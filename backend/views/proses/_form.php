<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Barang;
use backend\models\Supplier;

/* @var $this yii\web\View */
/* @var $model backend\models\Proses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proses-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'id_pengadaan')->textInput() ?>

      <?php echo $form->field($model, 'kode_barang')->label('Nama Barang')
            ->dropDownList(ArrayHelper::map(Barang::find()->asArray()->all(),'kode_barang','nama_barang'),['prompt'=>'- Pilih -',
            'onchange' => '
            $.post("index.php?r=barang/lists&id=' . '"+$(this).val(),
                           function(data){
                        var b = $("#proses-harga").val(data);
                           });'])
           ->hint('Pilih Barang masuk'); ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pengadaan')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'id_supplier')->label('Supplier')
        ->dropDownList(ArrayHelper::map(Supplier::find()->asArray()->all(),'id_supplier','nama_supplier'),['prompt'=>'- Pilih -'])
        ->hint('Pilih Supplier'); ?>
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
