<?php
require '../functions.php';

$name = $_POST['form_create_name'];
$data = array(
    'name' => $name,
);
createsJSON($data);