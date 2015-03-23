<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Column */

$this->title = '创建栏目';
$this->params['breadcrumbs'][] = ['label' => '栏目', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
