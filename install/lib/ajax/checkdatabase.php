<?php
/**
 * checkdatabase.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 12.01.14
 */

require_once ( "../../../lib/php/db/dbhandle.class.php" );
require_once ( "../../../lib/php/db/mysql.class.php" );

$user = $_POST['un'];
$pass = $_POST['pw'];
$db   = $_POST['d'];
$host = $_POST['hs'];
$port = $_POST['prt'];

$dbhandle = new Lib_Php_Db_Dbhandle($user, $pass, $db, "mysql", $host, $port);

$test = $dbhandle->init_db();

if ( $test == true ) {
    echo "OK";
} else {
    echo $test;
}