<?php


namespace app\modulse\admin\controllers;


use app\models\User;

class UsersController extends AdminPanelController
{
    public function actionIndex()
    {
        $usr = User::find()->all();
        return $this->render('index', ['$usr' => $usr]);
    }
}