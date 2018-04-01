<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property string $id_pemesan
 * @property string $nama_pelanggan
 * @property string $alamat_pelanggan
 * @property string $email_pelanggan
 * @property string $No_Tlp
 * @property string $status
 * @property int $paket_id
 * @property string $tanggal
 *
 * @property Cradit[] $cradits
 * @property Paket $paket
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pemesan', 'nama_pelanggan', 'alamat_pelanggan', 'email_pelanggan', 'No_Tlp', 'paket_id', 'tanggal'], 'required'],
            [['id_pemesan', 'paket_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama_pelanggan'], 'string', 'max' => 255],
            [['alamat_pelanggan', 'email_pelanggan'], 'string', 'max' => 500],
            [['No_Tlp'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 100],
            [['id_pemesan'], 'unique'],
            [['paket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Paket::className(), 'targetAttribute' => ['paket_id' => 'id_paket']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pemesan' => 'Id Pemesan',
            'nama_pelanggan' => 'Nama Pelanggan',
            'alamat_pelanggan' => 'Alamat Pelanggan',
            'email_pelanggan' => 'Email Pelanggan',
            'No_Tlp' => 'No  Tlp',
            'status' => 'Status',
            'paket_id' => 'Paket ID',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCradits()
    {
        return $this->hasMany(Cradit::className(), ['keterangan' => 'id_pemesan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaket()
    {
        return $this->hasOne(Paket::className(), ['id_paket' => 'paket_id']);
    }
}
