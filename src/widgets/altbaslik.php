<?php
namespace furkanaydgn\deneme\widgets;

use yii\helpers\Html;
use yii\base\Widget;


class altbaslik extends Widget
{
    public $model;
    public $baslik;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $html = '
          <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.footer{
background-color: #f59642;
  font-size:22px;
  color:#42f5e6;
  clear:both;
  display:block;
  letter-spacing:5px;
  border:1px solid #fff;
  padding:5px;
  text-decoration:none;
  width:100%;
  height:60px;
  margin:auto;
  text-align: center;
}
</style>
</head>
<body>

<p class="footer">       Furkan Aydoğan / 180202085</p>


</body>
</html>
        ';
        return $html;
    }

}
