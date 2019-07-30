<?php


namespace app\modulse\admin\controllers;



use yii\helpers\Url;
use yii\web\Controller;
use Yii;


class AdminPanelController extends Controller
{
    public $layout = 'default';

    public function beforeAction($action)
    {
        Yii::$app->getView()->params['topMenu'] = [
            ['label' =>'MTG', 'url' => Url::toRoute('mtg/index')],
            ['label' =>'Пользователи', 'url' => Url::toRoute('users/index')],
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