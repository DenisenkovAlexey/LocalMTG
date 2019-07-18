<?php

namespace app\modulse\admin\controllers;


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
        return $this->render('index');
    }

}
