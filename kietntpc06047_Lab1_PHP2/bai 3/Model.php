
<?php 

function get_user($email){
    include 'connect_database.php';
    $sql = "SELECT * FROM user WHERE email = ? ";
    $stmt = $conn -> prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    /* Get the result*/
    $result = $stmt->get_result();


    if($result->num_rows > 0){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    $conn->close();
}

?>
