<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Tambah</title>
</head>
<body>
    <form action="tambah.php" method="post">
        <label for="name">Nama :</label>
        <input type="text" id="name" name="name" required>
        <br></br>
        <label for="name">Email :</label>
        <input type="text" id="email" name="email" required>
        <br></br>
        <label for="name">Password :</label>
        <input type="text" id="password" name="password" required>
        <br></br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    //cek data
    include("connect.php");
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO user (nama, email, password) VALUES ('$name','$email','$pass')";

        if (mysqli_query($conn, $sql)){
            echo "<br>";
            echo "Data telah berhasil ditambahkan";
        }else{
            echo "Error".$sql."<br>".mysqli_error($conn);
        }
    }
    ?>
</body>
</html>

