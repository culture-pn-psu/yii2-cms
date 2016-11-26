<?php
namespace culturePnPsu\cms\modules\carousel\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class Carousel extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\carousel\models\Carousel';

    public $modelSearchClass = 'culturePnPsu\cms\modules\carousel\models\CarouselSearch';
}