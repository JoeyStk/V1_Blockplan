<?php
require '../functions.php';

$title = $_POST['form_create_name'];
$name = explode("0", explode("/", explode(' ', $title)[1])[0])[1] . '_Blockplan';

$data = array(
    'name' => $name,
    'title' => $title,
);
createsJSON($data);
header('Location: ..\..\frontend\templates\pages\admin\index.php');
