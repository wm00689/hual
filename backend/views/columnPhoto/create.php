<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ColumnPhoto */

$this->title = 'Create Column Photo';
$this->params['breadcrumbs'][] = ['label' => 'Column Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="column-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
