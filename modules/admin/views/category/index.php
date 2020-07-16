<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типы выключателей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="category-index">
                    <p>
                        <?= Html::a('Добавить тип выключателя', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>


                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'title',
                            //'title_small',
                            //'content:ntext',
                            //'img',
                            //'keywords',
                            //'description',
                            //'img_bg',
                            //'name_bg',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>


                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

