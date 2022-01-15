<?php
    $servername = "localhost";
    $database = "db_pendaftaran";
    $username = "root";
    $password ="";

    //membuat koneksi

    $conn = mysqli_connect($servername,$username,$password,$database);

    //check connection

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";
mysqli_close($conn);
?>