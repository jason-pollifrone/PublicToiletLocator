<html>
<body>

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
        header( "Refresh:5; url=toiletwayfinderadmin.php", true, 303);
	}else
        {

		echo "Account not found, returning to home page.";
        header( "Refresh:5; url=login.html", true, 303);
	}
    
?>

</body>
</html>
	
