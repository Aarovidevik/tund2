 <!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		<form>
		
			<input>
			<input>
		</form>

</body>
</html> 
<?php

	$age=7;

	if ($age<18){
		
		echo "alaealine";
		
	} else{
		
		echo "täisealine";
		
	}

?>
<br>

<?php

	for($i=0; $i<$age; $i=$i+1){
		echo ($i+1)."palju ";
	}
	{
		echo "Õnne";
	}
?>

<br>

<?php

	echo date("d.m.Y h.i.s A");

?>