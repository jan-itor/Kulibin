<?php

class SparePartsController extends Controller
{
	public function actionIndex($id)
	{
            $tovar = SpareParts::model()->findAllByAttributes(array('cat_id'=>$id));
            $category= Categories::model()->findByPk($id);
		$this->render('index',array('tovar'=>$tovar,'category'=>$category));
	}
        public function actionAddtovar()
	{

                $tovar = SpareParts::model()->findByPk($_GET['spare_id']); 
                Yii::app()->shoppingCart->put($tovar);//добавляем товар в корзину.

                $i = 0;
                foreach(Yii::app()->shoppingCart as $position){ //подсчитываем колличество товаров в корзине.
                $i++;
                }
                                
                echo 'Товаров: '.$i.'<br />';
                echo 'На сумму:'.Yii::app()->shoppingCart->getCost();
                yii::app()->end();
              //  $this->render('addtovar',array('model'=>$model));
	}
        public function actionView($spare_id)
	{
            $models= SpareParts::model()->findByPk($spare_id);
            $this->render('view',array('models'=>$models));
	}
        /*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}