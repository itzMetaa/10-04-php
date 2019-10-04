<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>
<?php 
    include("oop.php");
?>
<form>
	Adj meg egy értéket:<br />
	<input type="number" name="input_number"><br />
	<input type="hidden" name="action" value="cmd_elojelezes">
	<input type="submit" value="Megvizsgál">
</form>
<?php

if (isset($_GET["action"]) and $_GET["action"]=="cmd_elojelezes"){
	if(isset($_GET["input_number"]) and is_numeric($_GET["input_number"])){
		$progi = new eldontes($_GET["input_number"]);
		echo "A szám előjele: " . $progi->get_elojel() . "<br />";
	}
}

?>
</body>
</html>                                                                                      
