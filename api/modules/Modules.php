<?php

namespace api\modules;

/**
 * x module definition class
 */
class Modules extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
     public $controllerNamespace = 'api\modules\v1\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
