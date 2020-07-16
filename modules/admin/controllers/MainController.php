<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Category;
use app\modules\admin\models\Product;

class MainController extends AppAdminController
{
    public function actionIndex()
    {
        $category=Category::find()->count();
        $product=Product::find()->count();
        return $this->render('index', compact('category', 'product'));
    }


}