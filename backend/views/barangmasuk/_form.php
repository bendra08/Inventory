<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Barang;
use backend\models\Supplier;
use backend\models\Pengadaan


/* @var $this yii\web\View */
/* @var $model backend\models\Barangmasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangmasuk-form">

    <?php $form = ActiveForm::begin(); ?>

  <?php echo $form->field($model, 'kode_barang')->label('Nama Barang')
        ->dropDownList(ArrayHelper::map(Barang::find()->asArray()->all(),'kode_barang','nama_barang'),['prompt'=>'- Pilih -',
        'onchange' => '
        $.post("index.php?r=barang/lists&id=' . '"+$(this).val(),
                       function(data){
                    var b = $("#barangmasuk-harga").val(data);
                       });'])
       ->hint('Pilih Barang masuk'); ?>

 <?= $form->field($model, 'jumlah_barang')->textInput() ?>

 <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'tanggal_masuk')->widget(
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

    <?php echo $form->field($model, 'id_supplier')->label('Supplier')
        ->dropDownList(ArrayHelper::map(Supplier::find()->asArray()->all(),'id_supplier','nama_supplier'),['prompt'=>'- Pilih -'])
        ->hint('Pilih Supplier'); ?>
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript">
</script>

<script type="text/javascript">
    $(document).ready(function () {
      var firstDate = $("#barangmasuk-harga").val();
      console.log(firstDate);
    var txt  document.getElementById("barangmasuk-harga").setAttribute('value','My default value');
      $('#barangmasuk-jumlah_barang').on('change textInput input', function () {
                // txt.value =  $("#barangmasuk-harga").val();

                 var firstDate = $("#barangmasuk-jumlah_barang").val();

                 var barangs = $("#barangmasuk-kode_barang :selected").text();
                var barang = $("#barangmasuk-kode_barang").val();

                var kali = firstDate * barang ;
                 $("#barangmasuk-harga").val(kali);
                });

    });

</script>
