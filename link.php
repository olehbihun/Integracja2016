<?php
include('pars.php');
$a = array();
$html = file_get_html($_POST['url']);
$findLink = $html->find($_POST['elem']);
foreach($findLink as $element){
    array_push($a, $element->href);
}
echo json_encode($a);
