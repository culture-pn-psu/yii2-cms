<?php
namespace culturePnPsu\cms\modules\album\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class Album extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\album\models\Album';

    public $modelSearchClass = 'culturePnPsu\cms\modules\album\models\AlbumSearch';
    
}