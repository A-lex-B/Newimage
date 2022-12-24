<?php

namespace app\components;
use yii\web\ViewAction;

class NewImageViewAction extends ViewAction
{
    public $viewPrefix = '';

    public function render($viewName)
    {
        return $this->controller->renderPartial($viewName);
    }
}
?>