<?php
// require_once("classes/Reqests.php");
// // require_once("classes/Session.php");
// require_once "../classes/Order.php";
// require_once "classes/Validator/validatorRules.php";
// require_once "classes/Validator/Email.php";
// require_once "classes/Validator/Max.php";
// require_once "classes/Validator/numeric.php";
// require_once "classes/Validator/Str.php";
// require_once "classes/Validator/reqired.php";
// require_once "classes/Validator/Validator.php";






// $reqest=new Request;
// $sess= new Session;
// $sess->set('name','ahmed');
// echo $sess->get('name');

// echo "<pre>";
// print_r($_SESSION);
// echo"</pre>";
// $sess->remove('name');
// echo "<pre>";
// print_r($_SESSION);
// echo"</pre>";

// var_dump($sess->has('name')) ;
// $prod = new Orders;
// $result=$prod->delete(8);
// echo "<pre>";
// var_dump($result);
// echo "</pre>";
// $vail=new Vlidator;
// $vail->Vlidator('age','',['required','numeric']);
// echo "<pre>";
// print_r($vail->getErrors());
// echo "</pre>";


require_once("app.php");

use TechStore\Classes\Cart;
$cart= new Cart;
$tot=$cart->total();
echo $tot;
