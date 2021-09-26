<?php 
require '../functions.php';

// $hash = isset($_GET['hash']);
$hash = '1594179bb8e1f062351dcc4726b560d4';

$setup = [];
for ($i = 1; $i < 41; $i++) {
    $sub_array = [];
    $sub_array['from'] = $_POST['date_from_' . $i];
    $sub_array['to'] = $_POST['date_to_' . $i];
    $sub_array['number'] = $_POST['number=' . $i];
    $sub_array['class'] = $_POST['radio_class_id=' . $i];
    $sub_array['it_group'] = $_POST['radio_group_it_id=' . $i];
    $sub_array['electro_group'] = $_POST['radio_group_electro_id=' . $i];
    $sub_array['comment_it'] = $_POST['comment_it_' . $i];
    $sub_array['comment_electro'] = $_POST['comment_electro_' . $i];
    array_push($setup, $sub_array);
}
editsJSON($hash, $setup);
