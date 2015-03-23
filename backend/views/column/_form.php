<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Ueditor;
use yii\widgets\Models;
use yii\widgets\Template;
//use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Column */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="column-form">

    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'cname')->textInput(['maxlength' => 320]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 32]) ?>

    <?= Models::widget(['model'=>$model,'form'=>$form])?>

    <?= Template::widget(['model'=>$model,'form'=>$form])?>

    <?= $form->field($model,'isArticle')->radioList(['1'=>'是','2'=>'否'])?>

    <?= $form->field($model,'isShow')->radioList(['1'=>'是','2'=>'否'],[])?>

    <?= $form->field($model,'sort')->textInput(['maxlength' => 4,'style'=>'width:50px']) ?>

    <?= Ueditor::widget(['model'=>$model,'name'=>'content'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

