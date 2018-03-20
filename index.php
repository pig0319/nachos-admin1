<?php
$name = $add = "";
$nameErr = $addErr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr = "Name is requred";
	}else{
		$name = $_POST["name"];
	}
}


if(isset($_POST['btn_1'])){
	echo "pie";
	}
?>

<style>

.error{
	color:red;
}

</style>
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

<input type="text" name="name" value="<?php echo $name; ?>"><br>
<span class="error"><?php echo $nameErr; ?></span><br>

<input type="text" name="add" value="<?php echo $add; ?>"><br>

<input type="submit" name ="submit" value ="Submit">

<input type="submit" name ="btn_1" value ="button">

</form>