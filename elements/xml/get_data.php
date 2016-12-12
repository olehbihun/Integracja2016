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
  $file_name = rand(999999, 7777777777);

  switch ($_POST['format']) {
    case 'XML':
      $dom = new DOMDocument( "1.0");
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $xslt = $dom->createProcessingInstruction('xml-stylesheet', 'type="text/css" href="http://integracja.u464.indigo.elastictech.org/elements/xml/files/'.$file_name.'_'.$_POST['style'].'.css"');
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
      $name_xml = $file_name.'.xml';
      $dom->save('files/'.$name_xml);


      $name_css = $file_name.'_'.$_POST['style'].'.css';
      $fp = fopen('files/'.$name_css, 'w');

      $css ='';
      switch ($_POST['style']) {
        case 'styles1':
          $css = "@import url(https://fonts.googleapis.com/css?family=Aref+Ruqaa|Montserrat|Nova+Script|Oswald) smartphones{ font-family:".$_POST['fonts'].";  padding:".$_POST['padding_top']." 5% ".$_POST['padding_bottom']."!important; display:block;background:".$_POST['background_color'].";border-color:#3a173d}smartphone{  width:90%; margin:0 auto; display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-webkit-transition:all .2s ease-out}camera,code,colour,dimensions,display,id,name,os,processor,ringtones,sim_standarts{font-size:".$_POST['font_size']." !important; color:".$_POST['color_fonts']."; text-align:center;width:10%;border:1px solid #cecbcb;word-wrap:break-word;border-left:0;padding:1px}smartphones smartphone:hover{background-color:". $_POST['color_hover'] ." !important; color:".$_POST['fonts_color_hover']."; cursor:pointer}smartphones smartphone:nth-child(odd){background-color:rgba(110,210,137,.68)}id{border-left:1px solid #cecbcb}";
          //$css = "@import url(https://fonts.googleapis.com/css?family=Aref+Ruqaa|Montserrat|Nova+Script|Oswald);computers{font-family:".$_POST['fonts']."; padding:".$_POST['padding_top']." 5% ".$_POST['padding_bottom'].";display:block;background:".$_POST['background_color'].";border-color:#3a87ad}computer{display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .5s ease-out;-o-transition:all .5s ease-out;-webkit-transition:all .5s ease-out}HDD,cd_rom,code,color,cpu,data,id,link,name,opis,os,ram,screen,type_ram,weight{font-size:".$_POST['font_size']." !important; color:".$_POST['color_fonts']."; width:6%;border:1px solid ".$_POST['color_border'].";font-size:14px;word-wrap:break-word;border-left:0;padding:1px}computers computer:hover{background-color:". $_POST['color_hover'] ." !important;color:".$_POST['fonts_color_hover'].";cursor:pointer}computers computer:focus{background-color:red!important}computers computer:nth-child(1,3,8){background-color:rgba(110,210,137,.68)}id{word-wrap:normal;width:2%;border-left:1px solid #cecbcb}name{width:12%}code{width:5%}HDD,cd_rom,color,cpu,data,ink,os,screen,type_ram,weight{width:6%}ram{width:4%}opis{width:16%}";
        break;
        case 'styles2':
          $css = "@import url(https://fonts.googleapis.com/css?family=Aref+Ruqaa|Montserrat|Nova+Script|Oswald) smartphones{ font-family:".$_POST['fonts2']."; padding:".$_POST['padding_top2']." 10px ".$_POST['padding_bottom2']."; display:block;background:".$_POST['background_color2'].";border-color:#3a173d}smartphone{  width:90%; margin:0 auto; display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-webkit-transition:all .2s ease-out}camera,code,colour,dimensions,display,id,name,os,processor,ringtones,sim_standarts{font-size:".$_POST['font_size2']." !important; color:".$_POST['color_fonts2']."; text-align:center;width:10%;border:1px solid #cecbcb;word-wrap:break-word;border-left:0;padding:1px}smartphones smartphone:hover{background-color:". $_POST['color_hover2'] ." !important; color:".$_POST['fonts_color_hover2']."; cursor:pointer}smartphones smartphone:nth-child(odd){background-color:rgba(110,210,137,.68)}id{border-left:1px solid #cecbcb}";

          //$css ="smartphones{padding:10px 5%;display:block;background:#a59ca9;border-color:#3a173d}smartphone{display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-webkit-transition:all .2s ease-out}camera,code,colour,dimensions,display,id,name,os,processor,ringtones,sim_standarts{text-align:center;width:10%;border:1px solid #cecbcb;font-size:18px;word-wrap:break-word;border-left:0;padding:1px}smartphones smartphone:hover{background-color:#636382!important;color:#fffbfb;cursor:pointer}smartphones smartphone:nth-child(odd){background-color:rgba(110,210,137,.68)}id{border-left:1px solid #cecbcb}";
//          $css = "@import url(https://fonts.googleapis.com/css?family=Oswald);computers{padding:5%;display:block;background:#fff;border-color:#3a87ad;font-family:Oswald,sans-serif}computer{display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .5s ease-out;-o-transition:all .5s ease-out;-webkit-transition:all .5s ease-out}HDD,cd_rom,code,color,cpu,data,id,link,name,opis,os,ram,screen,type_ram,weight{width:6%;border:1px solid #cecbcb;font-size:14px;word-wrap:break-word;border-left:0;padding:1px;text-align:center}computers computer:hover{background-color:#577170!important;color:#fffbfb;cursor:pointer}computers computer:focus{background-color:red!important}computers computer:nth-child(even){background-color:rgba(110,210,137,.68)}id{word-wrap:normal;width:2%;border-left:1px solid #cecbcb}name{width:12%}code{width:5%}HDD,cd_rom,color,cpu,data,ink,os,screen,type_ram,weight{width:6%}ram{width:4%}opis{width:16%}";
        break;
        case 'styles3':
          $css = "@import url(https://fonts.googleapis.com/css?family=Aref+Ruqaa|Montserrat|Nova+Script|Oswald) smartphones{ font-family:".$_POST['fonts3']."; padding:".$_POST['padding_top3']." 10% ".$_POST['padding_bottom3']."; display:block;background:".$_POST['background_color3'].";border-color:#3a173d}smartphone{  width:90%; margin:0 auto; display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-webkit-transition:all .2s ease-out}camera,code,colour,dimensions,display,id,name,os,processor,ringtones,sim_standarts{font-size:".$_POST['font_size3']." !important; color:".$_POST['color_fonts3']."; text-align:center;width:10%;border:1px solid #cecbcb;word-wrap:break-word;border-left:0;padding:1px}smartphones smartphone:hover{background-color:". $_POST['color_hover3'] ." !important; color:".$_POST['fonts_color_hover3']."; cursor:pointer}smartphones smartphone:nth-child(odd){background-color:rgba(110,210,137,.68)}id{border-left:1px solid #cecbcb}";
          //$css = "@import url(https://fonts.googleapis.com/css?family=Raleway);smartphones{padding:1% 5%;display:block;border-color:#3a87ad;font-family:Raleway,sans-serif}smartphone{display:flex;background:#f7f7f7;border-color:#b94a48;-moz-transition:all .1s ease-out;-o-transition:all .1s ease-out;-webkit-transition:all .1s ease-out}camera,code,colour,dimensions,display,id,name,os,processor,ringtones,sim_standarts{width:10%;border:1px solid #cecbcb;font-size:12px;word-wrap:break-word;border-left:0;padding:1px;text-align:center}smartphones smartphone:hover{background-color:rgba(173,57,57,.52)!important;color:#fffbfb;cursor:pointer}smartphones smartphone:nth-child(odd){background-color:rgba(141,210,137,.68)}id{word-wrap:normal;border-left:1px solid #cecbcb}";
        break;
      }
      fwrite($fp, $css );
      fclose($fp);

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
