<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use Yii;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categoryid =  (int)Yii::$app->getRequest()->getQueryParam('categoryid');
        $category_data = Category::find()->filterWhere(['id'=>$categoryid])->one();

        $query = Product::find()
            ->leftJoin('product_category_relation as pr', 'pr.categoryid = '.$categoryid);

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', ['models'=>$models, 'pages'=>$pages, 'category_data'=>$category_data]);
    }

}
