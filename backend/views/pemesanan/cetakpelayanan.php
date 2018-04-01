<?php
//use yii\widgets\DetailView;
//use yii\helpers\Html;
?>
<p><b><h3 align="center">AHASS MOTOR SARIJADI</h3></b></p>
<p align="center">Ini adalah bukti Servis anda!</p>
<p></p>
<p></p>
<p></p>
<p></p>
<?php
//var_dump($dataProvider);

$total=0;
foreach ($models as $x) {
  	$kode = $x->id_pemesan;
    $nama = $x->nama_pelanggan;
    $alamat = $x->alamat_pelanggan;
    $email = $x->email_pelanggan;
    $No_Tlp = $x->No_Tlp;
    $status = $x->status;
    $tanggal = $x->tanggal;
    $jenis = $x->paket->jenis_paket;
    $harga = $x->paket->harga;
}

?>

<b><p align="center"><font size="5">Status Pembayaran : <i><?= $status ?></i></font></p></b>

<table class="table table-sm">
  <thead>
    <tr>
      <th>Kode Pelanggan</th>
      <th><?= $kode ?></th>
    </tr>
    <tr>
      <th>Nama</th>
      <th><?= $nama ?></th>
    </tr>

  </thead>
  <tbody>
    <tr>
      <td>
        <p><b><?= $nama ?></b></p>
        <p><?= $alamat ?></p>
        <p><?= $email ?></p>
        <p>Tanggal Pesan : <?= Yii::$app->formatter->asDate($tanggal, 'dd MMM yyyy') ?></p>
        <p>-----------------------------------------------------------------------------------</p>
      </td>
    </tr>
  </tbody>
</table>

<table class="table table-sm">
  <thead>
    <tr>
      <th>Jenis Paket</th>
      <th>No Telepon</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $jenis ?></th>
      <td><?= $No_Tlp ?></td>
      <td>Rp. <?= $harga  ?></td>

    </tr>
    <tr>
      <td></td>
      <td></td>
      <th>Total : </th>
      <td>Rp. <?= $harga ?></td>

    </tr>
  </tbody>
</table>
