<?php

class SparePartsController extends Controller
{
	public function actionIndex()
	{
            $model = SpareParts::model()->findAll();
		$this->render('index',array('model'=>$model));
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
	// Uncomment the following methods and override them if needed
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