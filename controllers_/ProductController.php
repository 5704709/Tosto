<?php

namespace app\controllers;
use Yii;
use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $productid =  (int)Yii::$app->getRequest()->getQueryParam('productid');
        $product = Product::find()->filterWhere(['id'=>$productid])->one();
        return $this->render('index', ['product'=>$product]);
    }

}
