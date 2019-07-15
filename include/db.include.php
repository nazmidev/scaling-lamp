<?php

define ('MYSQL_HOSTNAME', '');
define ('MYSQL_USERNAME', '');
define ('MYSQL_PASSWORD', '');
define ('MYSQL_DATABASE', '');

require_once('mysql-db.class.php');

$db = new mysql_db();
$db->connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error));
$db->select_db(MYSQL_DATABASE) or die(mysql_error());
$db->set_magic_quotes_off();

?>