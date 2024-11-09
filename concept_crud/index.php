<?php
include_once('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Sewa</title>
</head>
<body>
    <a href="form.php">Tambah Sewa</a>
    <table border="1 black solid">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>penyewa</th>
            <th>Tanggal Sewa</th>
            <th>Durasi</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>

        <?php

        $query = mysqli_query($connect, 'SELECT * FROM sewa');  

        $no = 1;
        while($row = mysqli_fetch_array($query)){

            $tanggal_selesai = date('Y-m-d', strtotime($row['tanggal_sewa']."+ $row[durasi] days"));  
            echo"<tr>";
                echo"<td>$no</td>";
                echo"<td>$row[judul]</td>";
                echo"<td>$row[penyewa]</td>";
                echo"<td>$row[tanggal_sewa]</td>";
                echo"<td>$row[durasi]</td>";
                echo"<td>$tanggal_selesai</td>";
                echo"<td><a href='formEdit.php?id=$row[id]'>Edit</a>
                         <a href='prosesDelete.php?id=$row[id]'>Delete</a></td>";
            echo"</tr>";
            
            $no++;
        }
        ?>
    </table>
</body>
</html>