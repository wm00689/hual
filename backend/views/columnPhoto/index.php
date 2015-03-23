<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ColumnPhotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Column Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="column-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Column Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'column_id',
            'image',
            'place',
            'create_at',
            // 'crate_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
