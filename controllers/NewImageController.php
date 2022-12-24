<?php

namespace app\controllers;

use yii\web\Controller;

class NewImageController extends Controller
{
    public function actions()
    {
        return [
            'page' => [
                'class' => 'app\components\NewImageViewAction',
            ],
        ];
    }
}