<?php
namespace culturePnPsu\cms\modules\article\api;

use Yii;
use culturePnPsu\cms\base\ApiChildModule;

class Article extends ApiChildModule
{
    public $modelClass = 'culturePnPsu\cms\modules\article\models\Article';

    public $modelSearchClass = 'culturePnPsu\cms\modules\article\models\ArticleSearch';
    
}