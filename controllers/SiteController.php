<?php

namespace app\controllers;

use app\models\RegistrationUserForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => array(
                'class' => VerbFilter::className(),
                'actions' => array(
                    'logout' => array('post'),
                ),
            ),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            $this->redirect('/site/login');
        }
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionTrade()
    {
        if (Yii::$app->user->isGuest)
        {
            $this->redirect('/site/login');
        }
        return $this->render('trade');
    }

    public function actionRegistration()
    {

        $model = new RegistrationUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->registration())
        {
            return $this->goBack();

        } else {
            return $this->render('registration', ['model' => $model]);
        }
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionDeck()
    {
        if (Yii::$app->user->isGuest)
        {
            $this->redirect('/site/login');
        }
        return $this->render('deck');
    }

    public function actionAccessDenied()
    {
        if (Yii::$app->user->isGuest)
        {
            $this->redirect('/site/login');
        }
        return $this->render('accessDenied');
    }
}
