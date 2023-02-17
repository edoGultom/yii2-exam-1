<?php

namespace siswa\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiswaWali;

/**
 * SiswaWaliSearch represents the model behind the search form about `common\models\SiswaWali`.
 */
class SiswaWaliSearch extends SiswaWali
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_siswa', 'id_wali'], 'integer'],
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
        $query = SiswaWali::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_siswa' => $this->id_siswa,
            'id_wali' => $this->id_wali,
        ]);

        return $dataProvider;
    }
}
