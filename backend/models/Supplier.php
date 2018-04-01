<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_supplier
 * @property string $nama_supplier
 * @property string $email_supplier
 * @property int $notlp
 * @property string $alamat_supplier
 *
 * @property Barangmasuk[] $barangmasuks
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notlp'], 'integer'],
            [['nama_supplier', 'email_supplier', 'alamat_supplier'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'nama_supplier' => 'Nama Supplier',
            'email_supplier' => 'Email Supplier',
            'notlp' => 'Notlp',
            'alamat_supplier' => 'Alamat Supplier',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangmasuks()
    {
        return $this->hasMany(Barangmasuk::className(), ['id_supplier' => 'id_supplier']);
    }
}
