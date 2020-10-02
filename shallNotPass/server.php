<?php
/*server.php*/
$connection_string = ssh2_connect("66.249.83.84", 22);

// $connection_string = ssh2_connect('127.0.0.1', 22);

if (@ssh2_auth_password($connection_string, 'googlebot', ''))
{
	echo "Authentication Successful!\n";
}
else
{
	throw new Exception("Authentication failed!");
}

$stream = ssh2_exec($connection_string, 'logs-notpass.php');
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
echo stream_get_contents($stream_out);