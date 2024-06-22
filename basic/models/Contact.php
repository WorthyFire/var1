<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{

    public static function tableName()
    {
        return 'contacts';
    }

    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'address'], 'required'],
            [['address'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Электронная почта',
            'address' => 'Адрес',
            'created_at' => 'Created At',
        ];
    }
}


