<?php
include('../../db.php');

$dom = new DomDocument('1.0');
$computers = $dom->appendChild($dom->createElement('computers'));
$result = mysql_query("CALL ".$_POST['procedura']);
while($row = mysql_fetch_assoc($result)){
  $computer = $computers->appendChild($dom->createElement('computer'));

  $count = $computer->appendChild($dom->createElement('count'));
  $count->appendChild($dom->createTextNode( $row['count'] ));
}

$dom->formatOutput = true;
$test1 = $dom->saveXML();
$name_xml = rand(1000, 99999999).'.xml';
$dom->save('files/'.$name_xml); // сохранение файла


echo json_encode($name_xml);
