<?php
 
var_dump($_POST);

echo $_POST["password"];
if($_POST["password"] == "2020") {
    $_SESSION ["id"] = $_POST ["name"];


}
else {
    echo "Mauvais couple identifiant / mot de passe";
}

?>

<ul id="nav">
<li><a href="connexion.php"> Page connexion </a></li>
<li><a href="http://localhost:8888/ISCC-2020/Jour-09/EX_01/mini-site-routing.php"> Page Acceuil</a></li>
