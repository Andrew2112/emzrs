<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запчасти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="product-index">
                    <p>
                        <?= Html::a('Добавить з\ч', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>


                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            //'category_id',
                            [
                                'attribute' => 'category_id',
                                'value' => function ($data) {
                                    return $data->category->title_small;
                                }
                            ],
                            'title',
                            //'content',
                            // 'keywords',
                            //'description',
                            //'img',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>


                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

