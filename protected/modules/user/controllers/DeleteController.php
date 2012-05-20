<?php

class DeleteController extends Controller
{

	public function actionPartner($partnerCode)
	{
		Yii::log("delete.{$partnerCode}\t\t\t[" . Yii::app()->request->getQueryString() . "]");

		$oPartner = EPartnerFactory::getPartner($partnerCode, Yii::app()->request->getQueryString());
		$oPartner->processDelete();
		$oPartner->getResponse();
	}

}