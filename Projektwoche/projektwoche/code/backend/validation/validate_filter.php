<?php
require '../functions.php';

$data = array(
   'job' => $_GET['form_filter_job'],
   'class' => $_GET['form_filter_class'],
   'group' => $_GET['form_filter_group'],
   'year' => $_GET['form_filter_year'],
);

// header();

var_dump($data);