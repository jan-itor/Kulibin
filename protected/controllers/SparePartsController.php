<?php

class SparePartsController extends Controller
{
	public function actionIndex()
	{
            $tovar = SpareParts::model()->findAll();
		$this->render('index',array('tovar'=>$tovar));
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
        public function actionMercedes()
	{
            $tovar = SpareParts::model()->findAll('spare_mark=:spare_mark', array(':spare_mark'=>'Mercedes'));
		$this->render('mercedes',array('tovar'=>$tovar));
	}
        public function actionBMW()
	{
            $tovar = SpareParts::model()->findAll('spare_mark=:spare_mark', array(':spare_mark'=>'BMW'));
		$this->render('mercedes',array('tovar'=>$tovar));
	}
        public function actionLada()
	{
            $tovar = SpareParts::model()->findAll('spare_mark=:spare_mark', array(':spare_mark'=>'ВАЗ'));
		$this->render('mercedes',array('tovar'=>$tovar));
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