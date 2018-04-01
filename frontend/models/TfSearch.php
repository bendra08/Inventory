<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tf;

/**
 * TfSearch represents the model behind the search form of `frontend\models\Tf`.
 */
class TfSearch extends Tf
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_servis', 'nominal'], 'integer'],
            [['keterangan', 'bukti_transfer'], 'safe'],
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
        $query = Tf::find();

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
            'id_servis' => $this->id_servis,
            'nominal' => $this->nominal,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'bukti_transfer', $this->bukti_transfer]);

        return $dataProvider;
    }
}
