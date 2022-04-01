<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="http://localhost:8080/tp_validation_formulaire/traitement.php" method="post">
    <p>Code Banque <input type="text" placeholder="code banque" name="cb" pattern="[0-9]{5}" required></p>
    <p> Code Agence<input type="text" placeholder="code agence" name="ca" pattern="[0-9]{5}" required></p>
    <p>Numéro de Compte <input type="text" placeholder="numero compte" name="nc"pattern="[0-9]{10}" required></p>
    <p> Clé Rib<input type="text" placeholder="clé" name="cle" pattern="[0-9]{2}" required></p>
    <p> <button>soumission</button></p>
</form>
<?php
if(isset ($_GET ["succes"])){
    echo "Votre rib est valide";
}
else{
    echo"votre rib n'est pas valide";
}
?>
</body>
</html>