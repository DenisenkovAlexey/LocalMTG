<?php


namespace app\modulse\admin\controllers;


class MtgController extends AdminPanelController
{

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionTest()
    {
        return 'dssds';
    }
}