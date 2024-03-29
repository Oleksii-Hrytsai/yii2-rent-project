<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;

class ChangePasswordForm extends Model
{
    public $password;

    public $repassword;

    public function rules()
    {
        return [
            [['password', 'repassword'], 'required'],
            ['repassword', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function changepassword()
    {
        if ($this->validate()) {
            $user = User::findOne(\Yii::$app->user->id);
            $user->setPassword($this->password);
            $user->save(true, ['password_hash']);
        }
    }
}