<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="toilet.css">
    	<link rel="icon" href="images/logo.ico">
	<title>Toilet Wayfinder</title>
    
</head>
<body>
<div id="reglog">
<?php
	
	//Receive input from client side
	$input = $_POST['username'] . $_POST['password'];

	
    

	//check if the input exist
	$exist = 0;

//read the file line by line
	foreach(file('admin.txt') as $line) {
		//compare the content of the input and the line
		if($line == $input."\n"){
			$exist = 1;
			break;
		}
	}
	
	if($exist == 1){
        echo "Login Successful. <br><br>You will be redirected to Admin page shortly.";     
        header( "Refresh:5; url=toiletwayfinderadmin.html", true, 303);
	}else
        {

		echo "Account not found, returning to home page.";
        header( "Refresh:5; url=login.html", true, 303);
	}
    
?>
</div>
</body>
</html>
	
