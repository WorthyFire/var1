<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Event extends ActiveRecord
{
    public static function tableName()
    {
        return 'events';
    }

    public function rules()
    {
        return [
            [['user_id', 'title'], 'required'],
            [['user_id'], 'integer'],
            [['description'], 'string'],
            [['event_date', 'created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
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

