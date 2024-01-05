<?php
function get_user()
{
    include "connect_database.php";
    $sql = 'SELECT * FROM user';
    $result = mysqli_query($conn, $sql);
    return $result;
} 
?>