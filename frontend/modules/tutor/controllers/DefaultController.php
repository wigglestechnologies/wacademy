<?php

namespace frontend\modules\tutor\controllers;

use yii\web\Controller;

/**
 * Default controller for the `tutor` module
 */
class DefaultController extends Controller
{
    public $layout = 'tutor';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
