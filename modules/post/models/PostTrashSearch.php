<?php

namespace culturePnPsu\cms\modules\post\models;

use Yii;
use culturePnPsu\cms\modules\post\models\PostSearch;

/**
 * PostSearch represents the model behind the search form about `culturePnPsu\cms\modules\post\models\Post`.
 */
class PostTrashSearch extends PostSearch
{

    public static function find()
    {
        return parent::find()->where(['!=', 'deleted_at', !null]);
    }
}
