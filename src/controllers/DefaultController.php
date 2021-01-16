<?php

namespace mehmetalperen95\manav\controllers;

class DefaultController extends \yii\web\Controller{


    public function actionIndex(){
        return $this->render('index');
    }
}