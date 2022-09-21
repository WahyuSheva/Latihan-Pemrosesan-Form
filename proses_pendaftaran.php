<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php 
    echo "Nama Lengkap : ";
    if (isset($_POST['nama'])) {
        echo $_POST['nama'];
       
    }
    echo "<br>";
    
    echo "Tempat Lahir : ";
    if (isset($_POST['TL'])) {
        echo $_POST['TL'];
        
    }
    echo "<br>";
   
    echo "Tanggal Lahir : ";
    if (isset($_POST['birth'])) {
        echo $_POST['birth'];
        
    }
    echo "<br>";
    
        echo "Jenis Kelamin : ";
    if (isset($_POST['JK'])) {
        echo $_POST['JK'];
        
    }
    echo "<br>";

    echo "Alamat : ";
    if (isset($_POST['alamat'])) {
        echo $_POST['alamat'];
    }
   echo "<br>";
   
        echo "Agama: ";
    if (isset($_POST['Agama'])) {
        echo $_POST['Agama'];
        
    }
    echo "<br>";
    ?>
</body>
</html>