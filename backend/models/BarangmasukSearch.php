<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Barangmasuk;

/**
 * BarangmasukSearch represents the model behind the search form of `backend\models\Barangmasuk`.
 */
class BarangmasukSearch extends Barangmasuk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_barang', 'harga','total_harga', 'kode_barang', 'id_supplier'], 'integer'],
            [['nama_barang', 'tanggal_masuk'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Barangmasuk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal_masuk' => $this->tanggal_masuk,
            'jumlah_barang' => $this->jumlah_barang,
            'harga' => $this->harga,
            'total_harga' => $this->total_harga,
            'kode_barang' => $this->kode_barang,
            'id_supplier' => $this->id_supplier,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang]);

        return $dataProvider;
    }
}
