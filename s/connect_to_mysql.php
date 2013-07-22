<?php
$database = array ();
$database ['host'] = 'localhost';
// Set up your mysql username and password
$database ['username'] = 'root';
$database ['password'] = '';
$database ['database'] = 'db';
$connect = @mysql_connect ( $database ['host'], $database ['username'], $database ['password'] );

if (! $connect) {
	die ( mysql_error () );
}
mysql_select_db ( $database ['database'], $connect ) or die ( mysql_error () );

?>
