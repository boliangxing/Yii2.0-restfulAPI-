<?php

namespace api\modules\controllers;

use yii\web\Controller;

/**
 * Default controller for the `x` module
 */
class HiController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return '1';
    }
}
