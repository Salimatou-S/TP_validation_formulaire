<?php
$banque=$_POST["cb"];
$agence= $_POST["ca"];
$compte= $_POST["nc"];
$cle= $_POST["cle"];
//var_dump($banque, $agence,$compte,$cle);

include_once("rib.class.php");
$validator =new RIBvalidator($banque,$agence,$compte,$cle);
//var_dump($validator);

if ($validator->isValid()){
    header('Location: index.php?succes');
    
} else {
    header('Location: index.php?error');
    echo"no";
}