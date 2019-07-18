<?php


namespace app\modulse\admin\controllers;


class MtgController extends adminPanelController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}