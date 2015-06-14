<?php
/*
*This file contains functions which helps to connect apis 
*Author: Ankur Gupta
*Dated : 08 June 2015
*/
function getAPIDataJ($func,$where=array())
{
	getConnection();
	$funcname = "";
	$funcname = $func;
	$ret = array();
	if($funcname <> "")
	{
		$result = $funcname($where);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$ret[] = $row;
			}
		}
	}
	closeConnection();
	return $ret;
}
?>