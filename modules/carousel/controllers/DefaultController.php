<?php
namespace culturePnPsu\cms\modules\carousel\controllers;

use Yii;
use culturePnPsu\cms\modules\category\models\Category;
use culturePnPsu\cms\modules\post\controllers\DefaultController as Controller;

/**
 * Default controller for the `carousel` module
 */
class DefaultController extends Controller
{

    public $modelClass = 'culturePnPsu\cms\modules\carousel\models\Carousel';
    
    public $modelSearchClass = 'culturePnPsu\cms\modules\carousel\models\CarouselSearch';

    public function beforeAction($action)
    {
        $myCategory = Category::find()->where(['name' => $this->module->id])->roots()->one();
        if (is_null($myCategory)){
            return $this->redirect(['category/create']);
        }else{
            if (!isset($this->module->settings['categoryRoot'])) {
                $model = \culturePnPsu\cms\models\Module::findOne(['name' => $this->module->id]);
                if(is_array($model->settings)) {
                    $model->settings = array_merge($model->settings, ['categoryRoot' => $myCategory->root]);
                }else{
                    $model->settings = ['categoryRoot' => $myCategory->root];
                }
                $model->save();
            }
        }

        return parent::beforeAction($action);
    }



    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $model->scenario = 'create';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'treeArray' => $this->treeArray
            ]);
        }
    }
}
