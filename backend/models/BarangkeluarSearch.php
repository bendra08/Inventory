<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Barangkeluar;

/**
 * BarangkeluarSearch represents the model behind the search form of `backend\models\Barangkeluar`.
 */
class BarangkeluarSearch extends Barangkeluar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barang', 'Jumlah','harga','total_harga', 'kode_barang'], 'integer'],
            [['nama_barang', 'Tanggal', 'Keterangan'], 'safe'],
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
        $query = Barangkeluar::find();

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
            'id_barang' => $this->id_barang,
            'Jumlah' => $this->Jumlah,
            'harga'=> $this->harga,
            'total_harga' => $this->total_harga,
            'Tanggal' => $this->Tanggal,
            'kode_barang' => $this->kode_barang,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
