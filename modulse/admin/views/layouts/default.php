<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div  class="wrap" >
<?php
if (isset($this->params['topMenu'])) {
    NavBar::begin([
        'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
            ],
            ]
    );
    echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-left'],
            'items' => $this->params['topMenu'],
        ]);
    NavBar::end();
}
?>

<div class = "col-xs-12 col-md-4 container" style="width: 15%">
<?php
if (isset($this->params['leftMenu'])) {
    echo Nav::widget([
            'items' => $this->params['leftMenu'],
        ]
    );
}
?>

</div>
<div class="container">
    <?= $content ?>
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
