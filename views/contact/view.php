<div class="site-section bg-light">
    <? use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\captcha\Captcha;

    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */
    /* @var $model app\models\ContactForm */

    $this->title = 'Напишите нам';
    ?>
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Спасибо за обращение к нам. Мы постараемся ответить вам как можно скорее.
                    </div>


                <?php else: ?>

                    <?php $form = ActiveForm::begin([
                        'id' => 'contact-form', /* Идентификатор формы */
                        'options' => ['class' => 'form-horizontal p-5 bg-white'], /* класс формы */
                        'fieldConfig' => [ /* классы полей формы */
                            'template' => "<div class=\"col-md-12 mb-3 mb-md-0 font-weight-bold\">{label}</div>\n<div class=\"col-md-12 mb-3 mb-md-0\">{input}</div>\n<div class=\"col-lg-12 col-lg-offset-3 \">{error}</div>"

                        ],
                    ]); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>
                    <?= $form->field($model, 'company')->textInput(['placeholder' => 'Название компании']) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Ваш адрес почты']) ?>
                    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Тема сообщения']) ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6, 'placeholder' => 'Текст сообщения']) ?>
                    <!--                --><? //= $form->field($model, 'verifyCode')->widget(Captcha::class, [
//                    'captchaAction' => '/index/captcha',
//                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
//                ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-default waves-effect btn-color-orange btn-color-orange-long', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                <?php endif; ?>

            </div>
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Контактная информация</h3>
                    <p class="mb-0 font-weight-bold">Адрес</p>
                    <p class="mb-4">192148, г. Санкт-Петербург, ул. Невзоровой, д. 9</p>

                    <p class="mb-0 font-weight-bold">Телефон</p>
                    <p class="mb-2">+7-930-001-10-24</p>
                    <p class="mb-2">+7-904-644-06-87</p>

                    <p class="mb-0 font-weight-bold">E-mail</p>
                    <p class="mb-0">emzt@bk.ru</p>
                    <p class="mb-0">energomeh@mail.ru</p>

                </div>

                <div class="p-4 mb-3 bg-white">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab72f3f92a584c7a371f79524a8409e0073f5c29c234934da979002247478881c&amp;source=constructor"
                            width="320" height="320" frameborder="0"></iframe>

                </div>
            </div>
        </div>

    </div>



