<?php


namespace app\controllers;


use app\models\Video;

class VideoController extends AppController
{
    public function actionView()
    {
        $videos=Video::find()->all();
        return $this->render('view', compact('videos'));
    }
}