<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `frontend\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pemesan', 'paket_id'], 'integer'],
            [['nama_pelanggan','plat', 'alamat_pelanggan', 'email_pelanggan', 'No_Tlp', 'status', 'tanggal'], 'safe'],
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
        $query = Pemesanan::find();

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
            'id_pemesan' => $this->id_pemesan,
            'paket_id' => $this->paket_id,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama_pelanggan', $this->nama_pelanggan])
            ->andFilterWhere(['like', 'plat', $this->plat])
            ->andFilterWhere(['like', 'alamat_pelanggan', $this->alamat_pelanggan])
            ->andFilterWhere(['like', 'email_pelanggan', $this->email_pelanggan])
            ->andFilterWhere(['like', 'No_Tlp', $this->No_Tlp])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
