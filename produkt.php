<?php
include('database.php');
include('pars.php');
$a = array();
$html = file_get_html($_POST['url']);
$findLink = $html->find($_POST['elem']);
$title = $html->find('h1');

$obj_db = new DB();
$obj_db->query("INSERT INTO smartphones SET  name='". trim ( strip_tags($title[0]))."',os='". trim ( strip_tags($findLink[0]))."',2_sim_support='". trim ( strip_tags($findLink[1]))."',colour='". trim ( strip_tags($findLink[2]))."',processor='". trim ( strip_tags($findLink[3]))."',dimensions='". trim ( strip_tags($findLink[4]))."',display='". trim ( strip_tags($findLink[5]))."',ringtones='". trim ( strip_tags($findLink[6]))."',camera='". trim ( strip_tags($findLink[7]))."',sim_standarts='". trim ( strip_tags($findLink[8]))."'");
echo json_encode($a);
