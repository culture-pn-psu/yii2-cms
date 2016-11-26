<?php
namespace culturePnPsu\cms\modules\carousel\controllers;

use Yii;
use culturePnPsu\cms\base\Controller;
use culturePnPsu\cms\modules\carousel\models\Setting;

class SettingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    private function findModel($name)
    {
        $model = Setting::findOne(['name' => $name]);
        return $model;
    }
}