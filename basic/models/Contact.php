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
            [['name', 'phone', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['address'], 'string'],
            [['email'], 'email'],
            [['phone'], 'match', 'pattern' => '/^\+?[0-9]{7,20}$/', 'message' => 'Телефон должен содержать от 7 до 20 цифр и может начинаться с +.'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'address' => 'Адрес',
            'created_at' => 'Дата создания',
        ];
    }
}
