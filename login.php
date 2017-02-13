<?php
session_start();
$message="";
if(count($_POST)>0) {
$db=new PDO('mysql:host=localhost;dbname=parcinfo','root','');
$result = $db->query("SELECT * FROM compte WHERE login='" . $_POST["login"] . "' and pwd = '". $_POST["pwd"]."'");
$row  = $result->fetch(PDO::FETCH_ASSOC);
if(is_array($row)) {
$_SESSION["login"] = $row[login];
$_SESSION["pwd"] = $row[pwd];
header("Location:index.html");

} else {
	
header("Location:Erreur.html");

}
}

?>