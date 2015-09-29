<?php

namespace frontend\controllers;


/**
 * Classe non utilis�e
 * Classe g�rant les appels AJAX
 * Pour le moment AJAX est g�r� via PJAX, mais plus tard � remplacer avec cette classe
 * @author Auchalet
 *
 */
class AjaxController extends Controller
{
	/**
	 * Charge le bon fichier .js
	 */
	public function init() {
	    parent::init();
	 
	    $this->jsFile = '@app/views/' . $this->id . '/ajax.js';
	 
	    // Publish and register the required JS file
	    Yii::$app->assetManager->publish($this->jsFile);
	    $this->getView()->registerJsFile(
	        Yii::$app->assetManager->getPublishedUrl($this->jsFile),
	        ['yii\web\YiiAsset'] // depends
	    );
	}
    


}
