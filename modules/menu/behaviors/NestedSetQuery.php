<?php

namespace culturePnPsu\cms\modules\menu\behaviors;

use culturePnPsu\cms\modules\menu\behaviors\NestedSetQueryBehavior;

/**
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class NestedSetQuery extends \wbraganca\behaviors\NestedSetQuery
{
    public function behaviors()
    {
        return [
            [
                'class' => NestedSetQueryBehavior::className(),
            ]
        ];
    }
}
