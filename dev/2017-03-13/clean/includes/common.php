<?php
//common.php

//code snippet for contact table

/**
 * Filters data per MySQL standards before entering database. 
 *
 * Adds slashes and helps prevent SQL injection per MySQL standards.    
 * Function enclosed in 'wrapper' function to add further functionality  
 * as vulnerabilities emerge.
 *
 * @param string $var data as entered by user
 * @param object $myConn active mysqli DB connection, passed by reference.
 * @return string returns data filtered by MySQL, adding slashes, etc.
 * @see dbIn() 
 * @todo none
 */

function dbIn($var,&$iConn)
{
	if(isset($var) && $var != "")
	{
		return mysqli_real_escape_string($iConn,$var);
	}else{
		return "";
	}
	
} #End dbIn()

//end code snippet for contact table