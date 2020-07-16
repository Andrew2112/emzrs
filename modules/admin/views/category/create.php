<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = 'Добавить тип выключателя';
$this->params['breadcrumbs'][] = ['label' => 'Тип выключателя', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="category-create">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>

