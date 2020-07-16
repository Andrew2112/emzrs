<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = 'Редактировать: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Запчасти', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="product-update">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

