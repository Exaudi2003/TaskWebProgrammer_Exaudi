<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblPegawai;

/**
 * TblPegawaiSearch represents the model behind the search form of `common\models\TblPegawai`.
 */
class TblPegawaiSearch extends TblPegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wilayah_id'], 'integer'],
            [['nama', 'jabatan', 'created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TblPegawai::find();

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
            'wilayah_id' => $this->wilayah_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan]);

        return $dataProvider;
    }
}
