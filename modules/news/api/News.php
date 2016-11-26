<?php
namespace culturePnPsu\cms\modules\news\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class News extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\news\models\News';

    public $modelSearchClass = 'culturePnPsu\cms\modules\news\models\NewsSearch';
    
}