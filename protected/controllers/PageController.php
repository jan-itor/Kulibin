<?php

class PageController extends Controller
{
	public function actionIndex()
	{
            $models= Pages::model()->findAll();
		$this->render('index',array('models'=>$models));
	}

	
}