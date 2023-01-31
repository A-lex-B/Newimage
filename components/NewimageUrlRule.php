<?php

namespace app\components;

use yii\web\UrlRuleInterface;
use yii\base\BaseObject;

class NewimageUrlRule extends BaseObject implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
        if ($route == 'new-image/page')
        {
            return '';
        }
        return false; 
    }

    public function parseRequest($manager, $request)
    {
        $urlarray = explode('/', ltrim($request->url, '/'));
        $params = [];
        if (!empty($urlarray[0]))
        {
            $params['view'] = $urlarray[0];
        }
        if ($urlarray[0] == 'gallerypage')
        {
            if (!empty($urlarray[1]))
            $params['pagename'] = $urlarray[1];
        }
        return ['new-image/page', $params];
    }
}