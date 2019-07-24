<?php

echo \yii\grid\GridView::widget([
         'dataProvider' => $dataProvider,
         'columns' => [
             'id',
             'username',
             ['class' => 'yii\grid\ActionColumn'],
        ]
     ]

 );
