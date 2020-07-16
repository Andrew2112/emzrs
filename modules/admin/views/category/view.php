<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Тип выключателя', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="category-view">
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
                            'title',
                            'title_small',
                            'content:ntext',
                            //'img',
                            [
                                'attribute'=>'img',
                                'value'=>"@web/web/images/{$model->img}",
                                'format'=>['image', ['width'=>100]],
                            ],
                            'keywords',
                            'description',
                            //'img_bg',
                            [
                                'attribute'=>'img_bg',
                                'value'=>"/images/{$model->img_bg}",
                                'format'=>['image', ['width'=>100]],
                            ],
                            'name_bg',
                        ],
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

