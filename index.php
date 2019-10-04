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
	Kérlek irj be valamit: xd 25-200<br />
	<textarea name="input_szoveg" maxlength="200"></textarea>
	<input type="hidden" name="action_2" value="cmd_text_nagybetus">
	<br /><br /><input type="submit" value="Megvizsgál"><br /><br />
</form>

<!-- 1. Feladat -->
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
				$f1 = new Nev($_GET["input_csaladNev"], $_GET["input_utoNev"], $_GET["input_kor"]);
				echo $f1->kiir();
			} else {
				echo "AA kor mező nem lehet sem negatív, sem nulla!";
			}
	} else {
		echo "Kérlek töltsd ki!";
	}
}
?>

<!-- 2. Feladat -->
<?php 
$szoveg = $_GET["input_szoveg"];
if(isset($szoveg)){
	
}

?>

</body>
</html>              
<!--
2. feladat:
	Kérj be egy legalább 25 karakterből álló szöveges változót, ami nem állhat több, mint 200 karakter!
	Ezután írasd ki úgy a szöveget, hogy minden szó kezdőbetűje nagybetűs legyen!
	Ezután Írsd ki azt is, hogy hány karakterből állt a bevitt érték!
	Számoltasd meg a szavak számát a mondatban!
-->