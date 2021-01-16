<?php

namespace furkanaydgn\deneme\controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        print_r("d");
        return $this->render('index');
    }
}