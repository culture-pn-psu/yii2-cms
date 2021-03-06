<?php

namespace culturePnPsu\cms\controllers;

use culturePnPsu\cms\base\Controller;

/**
 * Default controller for the `cms` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
