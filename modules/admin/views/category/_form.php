<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_small')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
    <?=$form->field($model, 'content')->widget(CKEditor::class, [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),

    ]); ?>
<!--    --><?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file_img')->fileInput() ?>
<!--    --><?//= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'img_bg')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file_img_bg')->fileInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'name_bg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
