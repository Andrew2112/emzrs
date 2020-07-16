<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = 'Изменить тип: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Тип выключателя', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="category-update">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

