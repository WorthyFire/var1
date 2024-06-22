<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;


class EventSearch extends Event
{

    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['title', 'description', 'event_date', 'created_at'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Event::find();


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'event_date' => $this->event_date,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'ID пользователя',
            'title' => 'Название',
            'description' => 'Описание',
            'event_date' => 'Дата события',
            'created_at' => 'Дата создания',
        ];
    }
}
