<?php


namespace app\controllers;


use app\models\Category;

class AboutController extends AppController
{
    public function actionIndex()
    {
        $categories = Category::find()->all();

        return $this->render('index', compact('categories'));
    }

}