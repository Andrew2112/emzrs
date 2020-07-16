<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = 'Добавить з/ч';
$this->params['breadcrumbs'][] = ['label' => 'Запчасти', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="product-create">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

