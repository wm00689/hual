<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ColumnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '栏目';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建栏目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-bordered">
        <tr><th>id</th><th>名称</th><th>操作</th></tr>
        <?php
        echo $columnTree;
        ?>
    </table>


</div>

