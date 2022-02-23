<?php
require_once("connect.php");
function confirm_query($result){
	if(!$result){
		die(mysql_error());
	}
}
function repEscChar($tarStr){
	$search=array("\\","\0","\n","\r","\x1a","'",'"');
	$replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
	$escStr=str_replace($search,$replace,$tarStr);
	return $escStr;

}
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
function roundNEAREST( $val, $nearest=500 )
{
    return $nearest * round( $val / $nearest );
}

function begin(){
    mysql_query("BEGIN");
}

function commit(){
    mysql_query("COMMIT");
}

function rollback(){
    mysql_query("ROLLBACK");
}
