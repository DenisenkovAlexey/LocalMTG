<?php


namespace app\modulse\admin\controllers;


use app\models\User;
use yii\data\ActiveDataProvider;

class UsersController extends AdminPanelController
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
                'pagination' => [
                    'pageSize' => 20,
                    ],
                ]
        );
        return $this->render('index',compact('dataProvider'));
    }
}