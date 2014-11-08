<?php
	mysql_connect($db_host,$db_user,$db_passwd) or die (mysql_errno());
	mysql_select_db($db_name) or die (mysql_errno());
	mysql_db_query($db_name,"SET Name utf-8");
?>