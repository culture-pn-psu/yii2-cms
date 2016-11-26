<?php
namespace culturePnPsu\cms\modules\category\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class Category extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\category\models\Category';

    public $modelSearchClass = 'culturePnPsu\cms\modules\category\models\CategorySearch';
}