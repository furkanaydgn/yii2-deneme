<?php

namespace furkanaydgn\deneme;
use Yii;
class Module extends  \yii\base\Module
{
    public function init()
    {
        $this->layout='main';
        parent::init();

    }
}