<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barangkeluar".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $Jumlah
  * @property int $harga
 * @property int $total_harga
 * @property string $Tanggal
 * @property string $Keterangan
 * @property int $kode_barang
 *
 * @property Barang $kodeBarang
 */
class Barangkeluar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangkeluar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Jumlah','harga','total_harga', 'kode_barang'], 'integer'],
            [['Tanggal', 'kode_barang'], 'required'],
            [['Tanggal'], 'safe'],
            [['nama_barang'], 'string', 'max' => 45],
            [['Keterangan'], 'string', 'max' => 99],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kode_barang' => 'kode_barang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'Jumlah' => 'Jumlah',
            'harga' => 'harga',
            'total_harga' => 'Total Harga',
            'Tanggal' => 'Tanggal',
            'Keterangan' => 'Keterangan',
            'kode_barang' => 'Kode Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarang()
    {
        return $this->hasOne(Barang::className(), ['kode_barang' => 'kode_barang']);
    }
}
