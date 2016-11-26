<?php
namespace culturePnPsu\cms\modules\calendar\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class Calendar extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\calendar\models\Calendar';

    public $modelSearchClass = 'culturePnPsu\cms\modules\calendar\models\CalendarSearch';
    
}