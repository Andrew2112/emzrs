<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="login-box">

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>


            <? $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-vertical'],
            ]) ?>
            <?= $form->field($model, 'username', ['template' => "<div class='form-group has-feedback input-group'>{input}<div class='input-group-append'><div class='input-group-text'> <span class=\"fas fa-user\"></span></div></div></div><div>{error}</div>"])->textInput(['placeholder' => 'Login']) ?>

            <?= $form->field($model, 'password', ['template' => "<div class='input-group '>{input}<div class='input-group-append'><div class='input-group-text'> <span class=\"fas fa-lock \"></span></div></div></div><div>{error}</div>",])->passwordInput(['placeholder' => 'Password']) ?>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <?= $form->field($model, 'rememberMe')->checkbox(['template' => "{label}{input}"]); ?>

                    </div>
                </div>

                <div class="col-4">
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary btn-block']) ?>

                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
