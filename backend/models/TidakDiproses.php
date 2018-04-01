<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tidak_diproses".
 *
 * @property int $id_pengadaan
 * @property string $nama_barang
 * @property int $jumlah_barang
 * @property string $Tanggal
 * @property int $harga_barang
 * @property string $Keterangan
 * @property string $status_pengadaan

 * @property Stokminimum $pengadaan
 */
class TidakDiproses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tidak_diproses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jumlah_barang', 'harga_barang'], 'integer'],
            [['Tanggal', 'Keterangan', 'status_pengadaan'], 'required'],
            [['Tanggal'], 'safe'],
            [['nama_barang'], 'string', 'max' => 45],
            [['Keterangan', 'status_pengadaan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pengadaan' => 'Id Pengadaan',
            'nama_barang' => 'Nama Barang',
            'jumlah_barang' => 'Jumlah Barang',
            'Tanggal' => 'Tanggal',
            'harga_barang' => 'Harga Barang',
            'Keterangan' => 'Keterangan',
            'status_pengadaan' => 'Status Pengadaan',
        ];
    }
/**
 * @return \yii\db\ActiveQuery
 */
public function getPengadaan()
{
    return $this->hasOne(Stokminimum::className(), ['kode_barang' => 'id_pengadaan']);
}
}
