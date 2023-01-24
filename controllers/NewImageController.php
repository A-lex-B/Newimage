<?php

namespace app\controllers;

use yii\web\Controller;
use app\assets\NewImageAsset;
use yii\helpers\url;
use yii;

class NewImageController extends Controller
{
    public $NIassets;
    public $NIassetsURL;
    public $URL;
    
    public function init()
    {
        parent::init();

        $this->NIassets = NewImageAsset::register($this->view);
        $this->NIassetsURL = $this->NIassets->baseUrl;
        
        $this->view->registerLinkTag([
            'rel' => 'shortcut icon',
            'type' => 'image/x-icon',
            'href' => "$this->NIassetsURL/favicon.ico",
          ]);
        $this->view->registerMetaTag([
            'http-equiv' => 'Content-Type', 'content' => 'text/html; charset=UTF-8'
          ]);
        $this->view->registerMetaTag([
            'name' => 'description', 'content' => 'Студия моды Новый образ осуществляет индивидуальный пошив одежды любой сложности из трикотажа, кожи, текстиля: платьев, костюмов, юбок, брюк, блузок,  вечерней одежды, верхней одежды; ремонт одежды из кожи, меха, трикотажа, текстиля; подгонку по фигуре; изготовление дизайнерских аксессуаров.'
          ]);
        $this->view->registerMetaTag([
            'name' => 'keywords', 'content' => 'одежда, пошив, пошива одежды, пошив одежды, ателье по пошиву одежды, пошив одежды ателье, раскрой, выкройки, заказ пошива одежды, пошив одежды москва, ателье, салон-ателье, дизайн-ателье, студия моды,  индивидуальный пошив одежды, пошив платьев, пошив вечерних платьев, пошив вечерней одежды, пошив юбок, пошив костюмов, пошив брюк, пошив верхней одежды, пошив блузок, услуги дизайнера, ремонт одежды, подгонка по фигуре, одежда на заказ, дизайнерские аксессуары,  вышивка'
          ]);
    }
    
    public function actions()
    {
        return [
            'page' => [
                'class' => 'app\components\NewImageViewAction',
            ],
        ];
    }

    public function beforeAction($action)
    {
        parent::beforeAction($action);
        $this->URL = rtrim(Url::current(['view' => null]), '/');
        return true;
    }
}