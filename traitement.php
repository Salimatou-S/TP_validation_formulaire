<?php
$banque=$_POST["cb"];
$agence= $_POST["ca"];
$compte= $_POST["nc"];
$cle= $_POST["cle"];
//var_dump($banque, $agence,$compte,$cle);

include_once("rib.class.php");
$validator =new RIBvalidator($banque,$agence,$compte,$cle);//instanciation
//var_dump($validator);

if ($validator->isValid()){
    header('Location: index.php?succes');
    exit;
} else {
    header('Location: index.php?error');
    echo"no";
}