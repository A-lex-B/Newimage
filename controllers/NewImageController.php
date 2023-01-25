<?php

namespace app\controllers;

use yii\web\Controller;
use app\assets\NewImageAsset;
use app\assets\GalleryAsset;
use yii\helpers\url;
use yii;

class NewImageController extends Controller
{
    public $layout = 'newimage';
    
    public function registerBundles()
    {
        if (Yii::$app->request->get('view') != 'gallerypage')
        {
            $NIassets = NewImageAsset::register($this->view);
        }
        else
        {
            $this->view->params['Galleryassets'] = GalleryAsset::register($this->view);
            $NIassets = $this->view->assetBundles['app\assets\NewImageAsset'];
        }
        $this->view->params['NIassetsURL'] = $NIassets->baseUrl;
        $this->view->params['URL'] = rtrim(Url::current(['view' => null, 'pagename' => null]), '/');

    }
    
    public function actions()
    {
        return [
            'page' => [
                'class' => 'yii\web\ViewAction',
                'viewPrefix' => '',
            ],
        ];
    }

    public function beforeAction($action)
    {
        parent::beforeAction($action);
        $this->registerBundles();
        return true;
    }
}