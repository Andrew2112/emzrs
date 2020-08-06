<?php


namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\ContactForm;
use yii\web\Request;

class ContactController extends AppController
{
    public function actionView()
    {

        /* Создаем экземпляр класса */
        $model = new ContactForm();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение об удачной отправке сообщения на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {

            Yii::$app->mailer->compose('message', compact('model'))
                ->setTo(Yii::$app->params['emailto'])
                ->setFrom('emzt@bk.ru')
                ->setSubject('Письмо обратной связи')
                ->send();
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
            /* иначе выводим форму обратной связи */
        } else {
            return $this->render('view', compact('model'));
        }
    }
}