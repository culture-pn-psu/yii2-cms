<?php



/* @var $this yii\web\View */
/* @var $model culturePnPsu\cms\modules\page\models\Page */

$this->title = 'Add new Page';
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">
    <?php
    if(Yii::$app->request->get('parent_id')){
        $parents = \culturePnPsu\cms\modules\category\models\Category::findOne(Yii::$app->request->get('parent_id'));
        $this->params['path'] = $parents->getParentsText(' &raquo; ').' &raquo; '.$parents->title;
    }else{
        $this->params['path'] = 'Root';
    }
    ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
