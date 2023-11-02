<?php
    $conn = mysqli_connect("127.0.0.1", "root", " ", "wad_project5", "3306");

    $result = mysqli_query($conn, "SELECT * FROM students where id = 1");
    //var_dump($result)

    var_dump(mysqli_fetch_object($result));

?>