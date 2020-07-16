<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{
    public function actionIndex()
    {
        $keywords='Запасные части к воздушным выключателям ВВН, ВВШ, ВВБ(М), ВВД(М), ВВБК, ВВГ-20, КАГ-24, ВВЭ, КРУЭ ЯЭ-110, ЯЭ-220';
        $description='Заказать и купить запчасти к выключателям ВВН, ВВШ, ВВБ, ВВБМ, ВВД, ВВДМ, ВВЭ 110-750кВ, КРУЭ ЯЭ-110, ЯЭ-220.';
        $categories = Category::find()->all();
        $this->setMeta(\Yii::$app->name, $keywords, $description);
        return $this->render('index', compact('categories'));
    }
}