<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proses".
 *
 * @property int $id_pengadaan
 * @property string $nama_barang
 * @property int $jumlah_barang
 * @property string $Tanggal
 * @property int $harga_barang
 * @property string $Keterangan
 * @property string $status_pengadaan
 *
 * @property Stokminimum $pengadaan
  * @property Supplier $supplier
  * @property Barang $kodeBarang
 */
class Proses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proses';
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
            [['id_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['id_supplier' => 'id_supplier']],
            [['id_pengadaan'], 'exist', 'skipOnError' => true, 'targetClass' => Stokminimum::className(), 'targetAttribute' => ['id_pengadaan' => 'kode_barang']],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kode_barang' => 'kode_barang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pengadaan' => 'Id Masuk',
            'nama_barang' => 'Nama Barang',
            'jumlah_barang' => 'Jumlah Barang',
            'Tanggal' => 'Tanggal',
            'harga_barang' => 'Harga Barang',
            'Keterangan' => 'Keterangan',
            'status_pengadaan' => 'Status Barang',
              'id_supplier' => 'Id Supplier',
                'kode_barang' => 'Kode Barang',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
     public function getSupplier()
     {
         return $this->hasOne(Supplier::className(), ['id_supplier' => 'id_supplier']);
     }
     public function getkodeBarang()
     {
         return $this->hasOne(Barang::className(), ['kode_barang' => 'kode_barang']);
     }

    public function getPengadaan()
    {
        return $this->hasOne(Stokminimum::className(), ['kode_barang' => 'id_pengadaan']);
    }
}
