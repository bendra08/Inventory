<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "paket".
 *
 * @property int $id_paket
 * @property string $jenis_paket
 * @property int $harga
 * @property string $deskripsi
 *
 * @property Pemesanan[] $pemesanans
 */
class Paket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_paket', 'harga', 'deskripsi'], 'required'],
            [['harga'], 'integer'],
            [['deskripsi'], 'string'],
            [['jenis_paket'], 'string', 'max' => 800],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_paket' => 'Id Paket',
            'jenis_paket' => 'Jenis Paket',
            'harga' => 'Harga',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['paket_id' => 'id_paket']);
    }
}
