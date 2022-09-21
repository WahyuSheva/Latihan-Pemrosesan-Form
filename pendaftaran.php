<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru SMK N 1 SAYUNG</title>
    <link rel="stylesheet" href="shv.css">
</head>
<center>
    <div class="container">
<body>
    <h3>Pendaftaran Siswa Baru</h3>
    <h3>SMK N 1 SAYUNG</h3>
    <form action="proses_pendaftaran.php" method="post">
        <table border=0>
            <tr>
                <td>Nama Lengkap :</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr> 
                <td>Tempat Lahir :</td>
                <td><input type="text" name="TL" /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="birth" /></td>
            <tr>
                <td>Jenis Kelamin </td>
                <td>:
                    <input type="radio" name="JK" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="JK" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="Agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Buddha</option>
                        <option>Hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="submit" value="Ulangi" />
                </td>
                    <td>
                        <br>
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</body>
</center>
</html>