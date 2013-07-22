<?php
session_start ();
require_once 'connect_to_mysql.php';
if(isset($_POST["login"])){
	if($_POST["email"] != "" && $_POST["password"] != ""){
		$email = trim ( $_POST ['email'] );
		$password = trim ( $_POST ['password'] );
		$query = mysql_query ( "SELECT * FROM user WHERE email = '$email' and password = '$password'" ) or die ( mysql_error () );
		if (mysql_num_rows ( $query ) > 0) {
			$info = mysql_fetch_array( $query ) or die ( mysql_error () ); 
			$_SESSION ['name'] = $info['name'];
			$_SESSION ['username'] = $email;
			echo "0";
		} else {
			echo "1";
		}
	}
}else if(isset ($_POST["register"])){
	
	$email = trim ( $_POST ['email'] );
	$password = trim ( $_POST ['password'] );
	$name = trim ( $_POST ['name'] );
	$race = trim ( $_POST ['race'] );
	$query = mysql_query ( "Insert into user (email,password,name,race) values ('$email','$password','$name','$race')" ) or die ( mysql_error () );
}
?>

