<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barangmasuk".
 *
 * @property int $id
 * @property string $nama_barang
 * @property string $tanggal_masuk
 * @property string $harga
 * @property int $jumlah_barang
 * @property int $total_harga
 * @property int $kode_barang
 * @property int $id_supplier
 *
 * @property Supplier $supplier
 * @property Barang $kodeBarang
 * @property Pengadaan $pengadaan
 */
class Barangmasuk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangmasuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal_masuk'], 'safe'],
            [['jumlah_barang','harga','total_harga', 'kode_barang', 'id_supplier'], 'integer'],
            [['kode_barang', 'id_supplier'], 'required'],
            [['nama_barang'], 'string', 'max' => 45],
            [['id_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['id_supplier' => 'id_supplier']],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kode_barang' => 'kode_barang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama Barang',
            'tanggal_masuk' => 'Tanggal Masuk',
            'jumlah_barang' => 'Jumlah Barang',
            'harga' => 'Harga',
            'total_harga' => 'Total Harga',
            'kode_barang' => 'Kode Barang',
            'id_supplier' => 'Id Supplier',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id_supplier' => 'id_supplier']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getkodeBarang()
    {
        return $this->hasOne(Barang::className(), ['kode_barang' => 'kode_barang']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getidPengadaan()
    {
        return $this->hasOne(Pengadaan::className(), ['id_pengadaan' => 'id_pengadaan']);
    }
}
