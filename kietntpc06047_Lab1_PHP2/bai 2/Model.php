<?php 
function get_courses(){
    include 'Data.php';
    return array_values($courses);
}
function find_by_block($block){
include 'Data.php';
return (array_key_exists($block,$courses) ? $courses[$block]:'Invalid course');
}
?>