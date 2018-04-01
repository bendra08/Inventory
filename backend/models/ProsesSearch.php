<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Proses;

/**
 * ProsesSearch represents the model behind the search form of `backend\models\Proses`.
 */
class ProsesSearch extends Proses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengadaan', 'jumlah_barang', 'harga_barang','id_supplier'], 'integer'],
            [['nama_barang', 'Tanggal', 'Keterangan', 'status_pengadaan'], 'safe'],
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
        $query = Proses::find();

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
            'id_pengadaan' => $this->id_pengadaan,
            'jumlah_barang' => $this->jumlah_barang,
            'Tanggal' => $this->Tanggal,
            'harga_barang' => $this->harga_barang,
            'id_supplier' => $this->id_supplier,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan])
            ->andFilterWhere(['like', 'status_pengadaan', $this->status_pengadaan]);

        return $dataProvider;
    }
}
