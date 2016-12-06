<?php
include('../../db.php');

$dom = new DomDocument('1.0');
$computers = $dom->appendChild($dom->createElement('computers'));
$result = mysql_query("CALL ".$_POST['procedura']);
while($row = mysql_fetch_assoc($result)){
  $computer = $computers->appendChild($dom->createElement('computer'));

  $id = $computer->appendChild($dom->createElement('id'));
  $id->appendChild($dom->createTextNode( $row['id'] ));

  $name = $computer->appendChild($dom->createElement('name'));
  $name->appendChild($dom->createTextNode( $row['name'] ));

  $code = $computer->appendChild($dom->createElement('code'));
  $code->appendChild($dom->createTextNode( $row['code'] ));

  $cpu = $computer->appendChild($dom->createElement('cpu'));
  $cpu->appendChild($dom->createTextNode( $row['cpu'] ));

  $screen = $computer->appendChild($dom->createElement('screen'));
  $screen->appendChild($dom->createTextNode( $row['screen'] ));

  $ram = $computer->appendChild($dom->createElement('ram'));
  $ram->appendChild($dom->createTextNode( $row['ram'] ));

  $type_ram = $computer->appendChild($dom->createElement('type_ram'));
  $type_ram->appendChild($dom->createTextNode( $row['type_ram'] ));

  $os = $computer->appendChild($dom->createElement('os'));
  $os->appendChild($dom->createTextNode( $row['os'] ));

  $opis = $computer->appendChild($dom->createElement('opis'));
  $opis->appendChild($dom->createTextNode( $row['opis'] ));

  $HDD = $computer->appendChild($dom->createElement('HDD'));
  $HDD->appendChild($dom->createTextNode( $row['HDD'] ));

  $cd_rom = $computer->appendChild($dom->createElement('cd_rom'));
  $cd_rom->appendChild($dom->createTextNode( $row['cd_rom'] ));

  $color = $computer->appendChild($dom->createElement('color'));
  $color->appendChild($dom->createTextNode( $row['color'] ));

  $weight = $computer->appendChild($dom->createElement('weight'));
  $weight->appendChild($dom->createTextNode( $row['weight'] ));

  $link = $computer->appendChild($dom->createElement('link'));
  $link->appendChild($dom->createTextNode( $row['link'] ));

  $data = $computer->appendChild($dom->createElement('data'));
  $data->appendChild($dom->createTextNode( $row['data'] ));

}

$dom->formatOutput = true;
$test1 = $dom->saveXML();
$name_xml = rand(1000, 99999999).'.xml';
$dom->save('files/'.$name_xml); // сохранение файла


echo json_encode($name_xml);
