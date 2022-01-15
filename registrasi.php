<?php 
    $servername = "localhost";
    $database = "db_pendaftaran";
    $username = "root";
    $password ="";

    $conn = mysqli_connect($servername,$username,$password,$database);
    
    $cek_user= mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE nisn= '$_POST[nisn]'"));
    if ($cek_user > 0) {
        echo '<script type="javascript">
              alert ("NISN Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
    }
    else {
        mysqli_query($conn,"INSERT INTO user (nama, alamat, tgllahir, gender, email, nisn, jurusan)
        VALUES ('$_POST[nama]', '$_POST[alamat]', '$_POST[tgllahir]', '$_POST[gender]','$_POST[email]', '$_POST[nisn]','$_POST[jurusan]')");
        
        echo '<script type="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.html";
              </script>';
              exit();
    }
?>