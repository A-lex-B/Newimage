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
    public $currentView = 'index';
    
    public function actionPage()
    {
        $this->currentView = Yii::$app->request->get('view', $this->currentView);
        
        if ($this->currentView != 'gallerypage')
        {
            $NIassetsURL = NewImageAsset::register($this->view)->baseUrl;
        }
        else
        {
            $Galleryassets = GalleryAsset::register($this->view);
            $NIassetsURL = $this->view->assetBundles['app\assets\NewImageAsset']->baseUrl;
        }
        $URL = rtrim(Url::current(['view' => null, 'pagename' => null]), '/');

        $params = compact(['NIassetsURL', isset($Galleryassets)?'Galleryassets':null, 'URL']);
        return $this->render($this->currentView, $params);
    }
}