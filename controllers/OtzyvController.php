<?php


namespace app\controllers;


use app\models\Otzyv;

class OtzyvController extends AppController
{

    public function actionIndex()
    {
        $title='Отзывы';
        $otzyv=Otzyv::find()->all();
        $this->setMeta("{$title}::" . \Yii::$app->name, '', '');
        return $this->render('index', compact('otzyv'));
    }
}