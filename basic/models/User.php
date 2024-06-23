<?php
namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['username', 'email'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 255, 'min' => 6],
            [['email'], 'email'],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return null;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getContacts()
    {
        return $this->hasMany(Contact::class, ['user_id' => 'id']);
    }

    public function getEvents()
    {
        return $this->hasMany(Event::class, ['user_id' => 'id']);
    }
}


