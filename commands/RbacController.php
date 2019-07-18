<?php
namespace app\commands;

use app\models\User;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
        User::deleteAll();

        $user = new User();
        $user->username = 'admin';
        $user->hash = YII::$app->security->generatePasswordHash('admin');
        $user->save();

        $user = new User();
        $user->username = 'user';
        $user->hash = YII::$app->security->generatePasswordHash('user');
        $user->save();


        // добавляем разрешение "canAdmin"
        $canAdmin = $auth->createPermission('canAdmin');
        $canAdmin->description = 'Can admin';
        $auth->add($canAdmin);

        //добавляем раррешение "canEditSelfCollection"
        $canEditSelfCollection = $auth->createPermission('canEditSelfCollection');
        $canEditSelfCollection->description = 'can edit self collection';
        $auth->add($canEditSelfCollection);

        // добавляем роль "user" и даём роли разрешение "canEditSelfCollection"
        $userRole= $auth->createRole('user');
        $auth->add($userRole);
        $auth->addChild($userRole,$canEditSelfCollection);

        // добавляем роль "admin" и даём роли разрешение "canAdmin"
        // а также все разрешения роли "author"
        $adminRole = $auth->createRole('admin');
        $auth->add($adminRole);
        $auth->addChild($adminRole, $canAdmin);
        $auth->addChild($adminRole, $userRole);

        // Назначение ролей пользователям по id.
        $auth->assign($userRole, User::findByUsername('user')->getId());

        $auth->assign($adminRole, User::findByUsername('admin')->getId());
    }
}