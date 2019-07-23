<?php


namespace app\modulse\admin\controllers;



use yii\web\Controller;
use Yii;

class AdminPanelController extends Controller
{
    public $layout = 'default';

    public function beforeAction($action)
    {
        unset(Yii::$app->getView()->params['leftMenu']);
        Yii::$app->getView()->params['topMenu'] = [
            ['label' =>'1 пункт меню', 'url' => ['#1']],
            ['label' =>'2 пункт меню', 'url' => ['#2']],
            ['label' =>'3 пункт меню', 'url' => ['#3']],
        ];

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