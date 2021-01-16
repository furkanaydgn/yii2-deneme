<?php
namespace furkanaydgn\deneme\widgets;

use yii\helpers\Html;
use yii\base\Widget;


class navbar extends Widget
{
    public $model;
    public $baslik;
    public function init()
    {
        parent::init();
    }

    public function run()
    {

      $x=$this->baslik[0];
      $y=$this->baslik[1];
      $z=$this->baslik[2];
      $berke=$this->model;

       $html  ='
       
       <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Comic Sans, Comic Sans MS, cursive;;
}

.topnav {
 
  overflow: hidden;
  background-color: #f54254;
}

.topnav a {

  float: right;
  color: #f2f2f2;
 font-size: 20px;
  padding: 14px 16px;
  margin-right: 15px;
  display: circle;
  padding: 8px;

}

.topnav a:hover {
 background-color: #ddd;  color: red;
 
 
}


#home{
float:left;

}
</style>
</head>
<body>

<div class="topnav" style="text-align: right">
 <a id="home" href=index.php?r=deneme/firmalistesi>Bilet Rezervasyon</a>
  <a href="index.php?r=deneme/kullanici">Yolcu Bilgi</a>
  <a href="index.php?r=deneme/firmalistesi">Bilet Al /Firma Liste</a>
  <a href="index.php?r=deneme/alinanbiletler">Alınan Biletler</a>
</div>

</body>
</html>
';

        return $html;
    }
}
