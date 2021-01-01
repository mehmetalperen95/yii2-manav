<?php

namespace mehmetalperen95\manav;

class DefaultController extends \yii\web\Controller{


    public function actionIndex(){
        return $this->render('index');
    }
}