<?php
//core
function dbcon(){
	$user = "root";
	$pass = "admin123";
	$host = "localhost";
	$db = "thesis";
	@mysql_connect($host,$user,$pass);
	@mysql_select_db($db);
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/sp2bj/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/sp2bj/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
