 <?php
 
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST)
	$signupEmailError = "";
	//kas on olemas(kas on nuppu vajutatud?)
	if(isset ($_POST["signupEmail"])){
		//oli olemas, keegi vajutas
		//kas oli tühi
		if(empty($_POST["signupEmail"])){
			
			$signupEmailError = "See väli on kohustuslik";
		}
	}
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		<form method="POST">
		
			<label>E-post</label>
			<input name= "loginEmail" type="email">
			<br><br>
			<label>Parool</label>
			<input name= "loginPassword" type="password">
			<br><br>
			<input type="submit">
		</form>
	<h1>Loo kasutaja</h1>
		<form method="POST">
		
			<input placeholder= E-post name= "signupEmail" type="email"><?php echo $signupEmailError;?>
			<br><br>
			<input placeholder= parool name= "signupPassword" type="password">
			<br><br>
			<input type="submit" value="Loo kasutaja">
		</form>
</body>
</html> 