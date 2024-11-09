<?php
    include_once('connect.php');

    $id = $_GET['id'];

    $query = mysqli_query($connect," SELECT * FROM sewa WHERE id='$id'");
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit</title>
</head>
<body>
    <form action="prosesEdit.php?id=<?php echo $id;?>" method="post">
        <label for="">Judul Buku</label>
            <div>
                <input type="text" name="judul" value="<?php echo $row['judul'] ?>">
            </div>

            <label for="">Penyewa</label>
            <div>
                <input type="text" name="penyewa" value="<?php echo $row['penyewa'] ?>">
            </div>

            <label for="">Durasi</label>
            <div>
                <input type="text" name="durasi" value="<?php echo $row['durasi'] ?>">
            </div>
            <div>
                <input type="submit" name="sewa" value="Sewa Buku">
            </div>
    </form>
</body>
</html>
