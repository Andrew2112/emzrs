<?php

use app\modules\admin\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?=$form->field($model, 'category_id')->dropdownList(
        Category::find()->select(['title_small', 'id'])->indexBy('id')->column(),
        ['prompt'=>'Выберите Категорию выключателя']
    ); ?>


    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'file')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
