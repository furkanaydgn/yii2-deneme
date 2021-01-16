<?php

namespace furkanaydgn\deneme\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use furkanaydgn\deneme\models\Kullanici;

/**
 * KullaniciSearch represents the model behind the search form of `furkanaydgn\deneme\models\Kullanici`.
 */
class KullaniciSearch extends Kullanici
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'useryas', 'fid', 'biletsayisi'], 'integer'],
            [['userssim', 'useroyisim', 'usercinsiyet'], 'safe'],
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
        $query = Kullanici::find();

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
            'uid' => $this->uid,
            'useryas' => $this->useryas,
            'fid' => $this->fid,
            'biletsayisi' => $this->biletsayisi,
        ]);

        $query->andFilterWhere(['like', 'userssim', $this->userssim])
            ->andFilterWhere(['like', 'useroyisim', $this->useroyisim])
            ->andFilterWhere(['like', 'usercinsiyet', $this->usercinsiyet]);

        return $dataProvider;
    }
}
