<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tf".
 *
 * @property string $id_servis
 * @property string $keterangan
 * @property string $bukti_transfer
 * @property string $nominal
 */
class Tf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_servis', 'keterangan', 'bukti_transfer', 'nominal'], 'required'],
            [['id_servis', 'nominal'], 'integer'],
            [['keterangan'], 'string', 'max' => 9999],
            ['bukti_transfer', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 512000, 'tooBig' => 'batas 500KB'],
            [['id_servis'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_servis' => 'Id Servis',
            'keterangan' => 'Keterangan',
            'bukti_transfer' => 'Bukti Transfer',
            'nominal' => 'Nominal',
        ];
    }
}
