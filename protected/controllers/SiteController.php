<?php

class SiteController extends Controller
{
	public $layout='column1';

   /**
	 * Displays the contact page
	 */
	public function actionIndex()
	{
     $this->render('index');
	}

	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}