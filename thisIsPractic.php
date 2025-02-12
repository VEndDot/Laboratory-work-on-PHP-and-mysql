<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'test';

    $link = mysqli_connect($host, $user, $password, $db_name);

    mysqli_query($link, "SET NAMES 'utf8'");

    $query = "SELECT * FROM workers WHERE id > 0";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    
    for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row);
 
    echo "<pre>";
    print_r($data);
    echo "</pre>";

?>