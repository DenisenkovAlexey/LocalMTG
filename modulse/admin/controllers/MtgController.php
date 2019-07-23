<?php


namespace app\modulse\admin\controllers;


use Yii;

class MtgController extends AdminPanelController
{

    public function actionIndex()
    {
        Yii::$app->getView()->params['leftMenu'] = [
            ['label' =>'Сеты', 'url' => ['#1']],
            ['label' =>'Карты', 'url' => ['#2']],
            ['label' =>'Цены', 'url' => ['#3']],
        ];
        return $this->render('index');
    }


}