<?php

namespace app\modulse\admin\controllers;


use Yii;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AdminPanelController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->getView()->params['leftMenu'] = [
            ['label' =>'1 пункт меню left', 'url' => ['#1']],
            ['label' =>'2 пункт меню left', 'url' => ['#2']],
            ['label' =>'3 пункт меню left', 'url' => ['#3']],
        ];
        return $this->render('index');
    }

}
