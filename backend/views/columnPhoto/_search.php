<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ColumnPhotoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="column-photo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'column_id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'crate_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
