<?php
        session_start();
?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../resource/toilet.css">
    	<link rel="icon" href="../images/logo.ico">
	<title>Toilet Wayfinder</title>
    
</head>
<body>
<div id="reglog">
<?php
	
	//Receive input from client side
	$input = $_POST['username'] . "," . $_POST['password'];

	
    

	//set exist = 0
	$exist = 0;

//read the file line by line
	foreach(file('../database/admin.txt') as $line) {
        $list = explode(',', $line);
          if($line == $input . "\n"){
			$exist = 1;
			break;
		}
	}
	//check if exist or not, and if exist run this line
	if($exist == 1){
        $_SESSION['login'] = "YES";
        echo "Login Successful. <br><br>You will be redirected to Admin page shortly.";     
        header( "Refresh:5; url=../client/toiletwayfinderadmin.php", true, 303);
	//else run this line
    }else
        {

		echo "Account not found, returning to home page.";
        header( "Refresh:5; url=../client/login.html", true, 303);
	}
    
?>
</div>
</body>
</html>
	
