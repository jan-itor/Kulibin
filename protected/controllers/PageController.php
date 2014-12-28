<?php

class PageController extends Controller
{
	public function actionIndex()
	{
            $models= Pages::model()->findAll();
		$this->render('index',array('models'=>$models));
	}

	public function actionView($page_id)
	{
            $models= Pages::model()->findByPk($page_id);
            $this->render('view',array('models'=>$models));
	}
}