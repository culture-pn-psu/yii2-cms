<?php
namespace culturePnPsu\cms\modules\post\controllers;

use Yii;
use culturePnPsu\cms\base\Controller;
use culturePnPsu\cms\modules\category\models\Category;

class CategoryController extends Controller
{

    public $masterViewsDir = __DIR__.'/../views';

    public function actionCreate()
    {
        $myCategory = Category::find()->where(['name' => $this->module->id])->roots()->one();
        if (is_null($myCategory)) {
            $model = new Category();
            if ($model->load(Yii::$app->request->post()) && $model->saveNode()) {
                $moduleModel = \culturePnPsu\cms\models\Module::findOne(['name' => $this->module->id]);
                if (is_array($moduleModel->settings)) {
                    $moduleModel->settings = array_merge($moduleModel->settings, ['categoryRoot' => $model->root]);
                } else {
                    $moduleModel->settings = ['categoryRoot' => $model->root];
                }
                $moduleModel->save();
                return $this->redirect(['default/index']);
            }
            $model->status = 1;
            $model->name = $this->module->id;

            if (Yii::$app->request->isAjax) {
                return $this->renderAjax('create', ['model' => $model]);
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        }else{
            $this->redirect(['default/index']);
        }
    }



//    protected function getCategoryRoot()
//    {
//        if (($model = Category::findOne(['name' => $this->module->id])) !== null) {
//            return $model;
//        } else {
//            throw new NotFoundHttpException('The requested page does not exist.');
//        }
//    }
//
//    protected function getTreeArray()
//    {
//        return Category::find()->dataFancytree($this->categoryRoot->id);
//    }
}