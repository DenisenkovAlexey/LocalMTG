<?php


namespace app\models;


use Yii;
use yii\base\Model;

class RegistrationUserForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat'], 'required'],
            ['password', 'compare', 'compareAttribute' => 'password_repeat'],
            ['username', 'unique', 'targetClass' => User::className()]
        ];
    }

    public function registration()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password = $this->password;
            $user->save();
            $auth = Yii::$app->authManager;
            $auth->assign($auth->getRole('user'),$user->getId());
            return true;
        } else {
            return false;
        }
    }
}