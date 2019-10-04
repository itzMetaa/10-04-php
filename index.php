<!DOCTYPE html>
<html>
<title>xd ora</title>
<body>
<?php 
    include("oop.php");
?>
<form>
	Add meg a családneved:<br />
	<input type="text" name="input_csaladNev"><br />
	Add meg a utóneved:<br />
	<input type="text" name="input_utoNev"><br />
	Add meg a korod:<br />
	<input type="number" name="input_kor"><br />
	<input type="hidden" name="action" value="cmd_nev_kiiras">
	<input type="submit" value="Megvizsgál">
</form>
<?php
$kor = $_GET["input_kor"];
$uNev = $_GET["input_utoNev"];
$csNev = $_GET["input_csaladNev"];

if (isset($_GET["action"]) and $_GET["action"]=="cmd_nev_kiiras"){
	if(
		isset($kor) and
		is_numeric($kor) and
		isset($csNev) and
		is_string($csNev) and
		isset($uNev) and
		is_string($uNev)
		){
			if($kor>0){
				$f1 = new nev($_GET["input_csaladNev"], $_GET["input_utoNev"], $_GET["input_kor"]);
				echo $f1->kiir();
			} else {
				echo "AA kor mező nem lehet sem negatív, sem nulla!";
			}
	} else {
		echo "Kérlek töltsd ki!";
	}
}

?>
</body>
</html>              
<!--
1. feladat:
	Kérd be a családneved és utóneved és a korod!
	Írasd ki egyben ezeket az adatokat az alábbi minta alapján:
	"Gipsz Jakab, 18 éves vagy!"
	1.1. Üresen nem maradhat egyik beviteli mező sem!
	1.2. A kor mező nem lehet sem negatív, sem nulla!
	1.3. A neveket össze kell illeszteni egy változóba, úgy, hogy minden kezdőbetű legyen nagybetűs!
-->