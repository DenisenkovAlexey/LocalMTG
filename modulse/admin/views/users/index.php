<?php

echo \yii\grid\GridView::widget([
         'dataProvider' => $dataProvider,
         'columns' => [
             'id',
             'username',
             'role',
             'permissions',
             ['class' => 'yii\grid\ActionColumn'],
        ]
     ]

 );
