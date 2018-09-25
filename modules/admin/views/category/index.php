<?php

use yii\grid\GridView;
use yii\helpers\Html;
use app\modules\admin\entities\Category;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            </div>
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                                'attribute' => 'image',
                                'value' => function(Category $model){
                                    return Html::img($model->getThumbFileUrl('image','admin'),['class' => 'img-circle']);
                                },
                                'format' => 'raw',
                                'filter' => false
                        ],
                        'name',
                        'slug',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
</div>
