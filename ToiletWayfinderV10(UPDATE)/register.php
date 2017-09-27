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
        $line = explode(",", $line);
		//compare the content of the input and the line
		if($line == $input."\n"){
			$exist = 1;
			break;
		}
	}
	
	if($exist == 1){
		echo "The username already exist. <br/><br/>Please enter another one via <a href='register.html'>Register</a>";
	}else{
		//open a file named "admin.txt"
		$file = fopen("admin.txt","a");
		//insert this input (plus a newline) into the database.txt
		fwrite($file,$input."\n");
		//close the "$file"
		fclose($file);
		echo "Admin account registration was successful. <br><br>You will be redirected to login page shortly.";
        header( "Refresh:5; url=login.html", true, 303);
	}
    
?>
</div>
</body>
</html>
	
