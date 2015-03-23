<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\template */

$this->title = '创建模板';
$this->params['breadcrumbs'][] = ['label' => '模板', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
