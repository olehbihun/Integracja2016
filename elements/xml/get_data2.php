<?php
include('../../database.php');
$obj_db = new DB();

$dom = new DomDocument('1.0');
$smartphones = $dom->appendChild($dom->createElement('smartphones'));

$d1 = date('Y-m-d H:i:s');
$d = new DateTime($d1);
$d->sub(new DateInterval('PT01H60S'));
$d2 = $d->format('Y-m-d H:i:s');

$res = $obj_db->query(" CALL get_log('".$d2."','".$d1."','".$_SERVER['REMOTE_ADDR']."') ");

if($res[0]['count']<30){
    $obj_db->callProc(" log('".$_SERVER['REMOTE_ADDR']."','".date('Y-m-d H:i:s')."','".' LANGUAGE:'.$_SERVER['HTTP_ACCEPT_LANGUAGE'].' HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."')");
    $result = $obj_db->query("CALL ".$_POST['procedura']);

    $name = rand(1000, 99999999).'.json';
    $fp = fopen('files/'.$name, 'w');
    fwrite($fp, json_encode($result));
    fclose($fp);
    echo json_encode($name);
}else{
  echo 'limit';
}
