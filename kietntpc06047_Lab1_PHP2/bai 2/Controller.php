<?php 
include 'Model.php';

$list_of_courses = get_courses();
$block=(!empty($_GET['block'])) ? $_GET['block']  : '';
$courses_name = find_by_block($block);

include 'View.php';
?>