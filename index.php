<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <!-- Link -->
    <a href="tambah.php">Tambah Data</a>
    <!-- Table -->
    <h3>Data User</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include("connect.php");
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        while ($row= mysqli_fetch_array($result)) :?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
                <a href="delete.php?id=<?php echo $row["id"];?>">Hapus</a>
            </td>
        </tr>
        <?php $i++;
        endwhile; ?>
    </table>
    <?php 
    // if(isset($_GET["delete"])){
    //     $id = $_GET["delete"];
    //     $sql = "DELETE FROM user WHERE id=$id";
    //     if(mysqli_query($conn, $sql)){
    //         echo "<script>alert('data berhasil dihapus');</script>";
    //     }else{
    //         echo "<script>alert('data gagal dihapus');</script>";
    //     }
    // }
    ?>
</body>
</html>