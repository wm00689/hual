<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\templateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '模板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建模板', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('更新模板缓存', ['cache'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'ename',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
