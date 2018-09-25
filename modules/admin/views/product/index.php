<?php

use app\modules\admin\entities\Client;
use app\modules\admin\helpers\ClientHelpers;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\admin\entities\Product;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <?= Html::a('Добавить клиента', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            </div>
            <div class="box-body">
                <?php
                try {
                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'value' => function (Product $model) {
                                    return $model->mainPhoto ? Html::img($model->mainPhoto->getThumbFileUrl('file', 'admin')) : null;
                                },
                                'format' => 'raw',
                                'contentOptions' => ['style' => 'width: 100px'],
                            ],
                        ],
                    ]);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>
</div>
