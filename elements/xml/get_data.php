<?php
include('../../database.php');
$obj_db = new DB();


$d1 = date('Y-m-d H:i:s');
$d = new DateTime($d1);
$d->sub(new DateInterval('PT01H60S'));
$d2 = $d->format('Y-m-d H:i:s');

$res = $obj_db->query(" CALL get_log('".$d2."','".$d1."','".$_SERVER['REMOTE_ADDR']."') ");


if($res[0]['count']<300){

  $obj_db->callProc(" log('".$_SERVER['REMOTE_ADDR']."','".date('Y-m-d H:i:s')."','".' LANGUAGE:'.$_SERVER['HTTP_ACCEPT_LANGUAGE'].' HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."')");
  $result = $obj_db->query("CALL ".$_POST['procedura']);

  switch ($_POST['format']) {
    case 'XML':
      $dom = new DOMDocument( "1.0");
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $xslt = $dom->createProcessingInstruction('xml-stylesheet', 'type="text/css" href="http://integracja.u464.indigo.elastictech.org/css/'.$_POST['style'].'.css"');
      $dom->appendChild($xslt);
      $smartphones = $dom->appendChild($dom->createElement('smartphones'));

      foreach ($result as $row) {
        $smartphone = $smartphones->appendChild($dom->createElement('smartphone'));
        $id = $smartphone->appendChild($dom->createElement('id'));
        $id->appendChild($dom->createTextNode( $row['id'] ));
        $name = $smartphone->appendChild($dom->createElement('name'));
        $name->appendChild($dom->createTextNode( $row['name'] ));
        $os = $smartphone->appendChild($dom->createElement('os'));
        $os->appendChild($dom->createTextNode( $row['os'] ));
        $colour = $smartphone->appendChild($dom->createElement('colour'));
        $colour->appendChild($dom->createTextNode( $row['colour'] ));
        $processor = $smartphone->appendChild($dom->createElement('processor'));
        $processor->appendChild($dom->createTextNode( $row['processor'] ));
        $dimensions = $smartphone->appendChild($dom->createElement('dimensions'));
        $dimensions->appendChild($dom->createTextNode( $row['dimensions'] ));
        $display = $smartphone->appendChild($dom->createElement('display'));
        $display->appendChild($dom->createTextNode( $row['display'] ));
        $ringtones = $smartphone->appendChild($dom->createElement('ringtones'));
        $ringtones->appendChild($dom->createTextNode( $row['ringtones'] ));
        $camera = $smartphone->appendChild($dom->createElement('camera'));
        $camera->appendChild($dom->createTextNode( $row['camera'] ));
        $sim_standarts = $smartphone->appendChild($dom->createElement('sim_standarts'));
        $sim_standarts->appendChild($dom->createTextNode( $row['sim_standarts'] ));
      }
      $dom->formatOutput = true;
      $test1 = $dom->saveXML();
      $name_xml = rand(999999, 7777777777).'.xml';
      $dom->save('files/'.$name_xml);

      break;
    case 'JSON':
      $name_xml = rand(1000, 99999999).'.json';
      $fp = fopen('files/'.$name_xml, 'w');
      fwrite($fp, json_encode($result));
      fclose($fp);

      break;

    default:

      break;
  }

  echo json_encode($name_xml);
}else{
  echo 'limit';
}
