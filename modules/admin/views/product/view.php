<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Запчасти', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="product-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                           // 'category_id',
                            [
                                'attribute'=>'category_id',
                                'value'=>$model->category->title_small,
                            ],
                            'title',
                            'content',
                            'keywords',
                            'description',
                           // 'img',
                            [
                                'attribute'=>'img',
                                'value'=>"/{$model->img}",
                                'format'=>['image', ['width'=>100]],
                            ],
                        ],
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

