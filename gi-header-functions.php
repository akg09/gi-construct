<?php
function getUserRequest_without_decode($data = array())
{
	if (isset($_GET))
	{
	    foreach ($_GET as $k => $v)
	    {
	    	if(is_array($v))
	    	{
		       	$data[$k]	= $v;
	    	}
	    	else
	    	{
		       	$data[$k]	= trim(($v));
	    	}
	    }
	}

	if (isset($_POST))
	{
	    foreach ($_POST as $k => $v)
	    {
	    	if(is_array($v))
	    	{
		       	$data[$k]	= $v;

	    	}
	    	else
	    	{
		       	$data[$k]	= trim(($v));
	    	}
	    }
	}
	return $data;
}
function send_email($subject,$msg,$sendto)
{
	$to = $sendto;
	$subject = $subject;
	$message = $msg;
	$header = "From:support@girishconstructions.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail ($to,$subject,$message,$header);
}
?>