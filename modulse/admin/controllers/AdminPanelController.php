<?php


namespace app\modulse\admin\controllers;


use Yii;
use yii\web\Controller;

class AdminPanelController extends Controller
{
    public $layout = 'test';

    public function beforeAction($action)
    {
        if (!Yii::$app->user->can('canAdmin')) {
            $this->redirect('site/access-denied');
        }
        return parent::beforeAction($action);
    }

    public function actionAccessDenied()
    {
        return 'доступ закрыт';
    }
}