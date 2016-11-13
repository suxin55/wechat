<?php
/**
  * wechat php test
  */

//define your token

include './Wechat.class.php';
define("TOKEN", "suxin");
define("APPID","wxe79794a8d555528e");
define("APPSECRET","dfa80de48be33c4a1c995c31d5843547");
$wechatObj = new Wechat(APPID,APPSECRET,TOKEN);
//$wechatObj->firstValid();
$wechatObj->responseMSG();


?>