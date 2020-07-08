<?php
 session_start();
var_dump($_POST);

echo $_POST["password"];
if($_POST["password"] == "2020") {
    $_SESSION ["id"] = $_POST ["name"];
    header('Location: mini-site-routing.php');

}
else {
    echo "Mauvais couple identifiant / mot de passe";
}

?>

<ul id="nav">
<li><a href="connexion.php"> Page connexion </a></li>
<li><a href="mini-site-routing.php"> Page Acceuil</a></li>
</ul>