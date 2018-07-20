<?php

namespace common\models\search;

use backend\models\User;
use common\models\City;
use common\models\Lessons;
use common\models\Schools;
use Mpdf\Tag\S;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserTestsState;

/**
 * UserTestsStateSearch represents the model behind the search form of `common\models\UserTestsState`.
 */
class UserTestsStateSearch extends UserTestsState
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'id',
                'user_id',
                'status',
                'grade',
                'lesson_id',
                'point',
                'lesson_type',
                'school',
                'city',

            ], 'integer'],
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
        $query = UserTestsState::find()
            ->select(['uts.*','s.name as school','c.name as city'])
            ->from(UserTestsState::tableName() . ' as uts')
            ->leftJoin(User::tableName() . ' u', 'u.id = uts.user_id')
            ->leftJoin(City::tableName() . ' c', 'c.id = u.city')
            ->leftJoin(Schools::tableName() . ' s', 's.id = u.school');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->setSort([
            'attributes' => [
                'id',
                'user_id',
                'status',
                'grade',
                'lesson_id',
                'point',
                'lesson_type',
                'school',
                'city',
            ]
        ]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'uts.id' => $this->id,
            'uts.user_id' => $this->user_id,
            'uts.status' => $this->status,
            'uts.grade' => $this->grade,
            'uts.lesson_id' => $this->lesson_id,
            'uts.point' => $this->point,
            'uts.lesson_type' => $this->lesson_type,
//            'region' => $this->region,
        ]);
        $query
            ->andFilterWhere(['=', 'u.school', $this->school])
            ->andFilterWhere(['=', 'u.city', $this->city]);
        return $dataProvider;
    }
}
