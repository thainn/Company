<?php
if ($phpver >= '4.0.4pl1' && strstr($_SERVER["HTTP_USER_AGENT"],'compatible'))
{
	if (extension_loaded('zlib')) 
	{
	ob_end_clean();
	ob_start('ob_gzhandler');
	}
}
else if ($phpver > '4.0') 
{
	if (strstr($HTTP_SERVER_VARS['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	{
		if (extension_loaded('zlib'))
		{
			$do_gzip_compress = TRUE;
			ob_start();
			ob_implicit_flush(0);
		}
	}
}
?>