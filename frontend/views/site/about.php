<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About' ;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <dt>Admin</dt></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <p>Email : Admin@spectaservis.com</p>
        <p>HP : 087850364255</p>

      </div>
    </div>
  </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <dt>Cara Servis</dt></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <p>-> Untuk melakukan pemesanan silahkan login terlebih dahulu kalau belum login, silahkan signup terlebih dahulu</p>
          <p>-> kalau belum login, silahkan signup terlebih dahulu </p>
          <p>-> Setelah login silahkan langsung ke form info pelayanan dan pilih paket servis </p>
          <p>-> Pelanggan yang telah melakukan pemesanan dapat melihat status servis nya pada form servis</p>
          <p>-> Waktu servis diproses paling lambat adalah 24 jam setelah melakukan servis </p>
          <p>-> admin akan menuju ke tempat anda apabila servis sudah diproses oleh admin </p>
          <p>-> admin akan melakukan pengecekan singkat jika bisa diperbaiki ditempat maka bisa langsung dibereskan servisnya</p>
          <p>-> Admin akan mengkonfirmasi servisan anda baik via hp maupun email atau anda bisa cek di form servis tentang status servis anda</p>
          <p>-> Servisan yang telah selesai wajib dibayar paling lambat 1 hari setelah ada konfirmasi</p>
            <p>-> Dalam pembayaran terdapat dua cara, transfer dan kartu kredit</p>
          <p>-> Setelah melakukan pembayaran anda wajib untuk konfirmasi kembali kepada admin dengan menyatumkan bukti pembayaran </p>

        </div>
      </div>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <dt>Pembayaran Servis

</dt> </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"><h2>No Rekening</h2>

        <table style="width:100%">
            <tr>
          <th>BRI</th>
          <th>54800101515371 A/N Bendra Wardana </th>
          </tr>
          <th>BNI</th>
          <th>0380947296 A/N Cahya Kurniawan </th>
          </tr>
          <tr>

        </table>
        <div id="demo" class="collapse">
      </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      <dt>Pembayaran Via Kartu Kredit

        <table style="width:100%">
            <tr>
          <th>NO KARTU = 12345678910</th>
          <th>Valid = 2020-12-12 </th>
            <th>a/n =Cahya Kurniawan </th>
              <th>CVV = 120 </th>

          </tr>
          <tr>

        </table>
        <div id="demo" class="collapse">
      </div>
</div>

    </div>
  </div>

</div>

</div>
