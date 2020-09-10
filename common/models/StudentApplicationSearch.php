<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\StudentApplication;

/**
 * StudentApplicationSearch represents the model behind the search form of `common\models\StudentApplication`.
 */
class StudentApplicationSearch extends StudentApplication
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentApplicationId', 'phoneCode', 'courseId', 'scholarship', 'amountId'], 'integer'],
            [['fullName', 'phoneNumber', 'email'], 'safe'],
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
        $query = StudentApplication::find();

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
            'studentApplicationId' => $this->studentApplicationId,
            'phoneCode' => $this->phoneCode,
            'courseId' => $this->courseId,
            'scholarship' => $this->scholarship,
            'amountId' => $this->amountId,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'phoneNumber', $this->phoneNumber])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
