<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php 
    include('connect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) :?>
    
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <label for="name">Nama :</label>
        <input type="text" id="name" name="name" value="<?=$row['nama']?>" required>
        <br></br>
        <label for="name">Email :</label>
        <input type="text" id="email" name="email" value="<?=$row['email']?>"required>
        <br></br>
        <label for="name">Password :</label>
        <input type="text" id="password" name="password" value="<?=$row['password']?>" required>
        <br></br>

        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php 
    endwhile;
    //cek data
    // $id = $_GET['id'];
    // include("connect.php");
    if(isset($_POST['submit'])){
        $id1 = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "UPDATE user SET nama='$name', email='$email', password='$pass' WHERE id='$id1'";

        if (mysqli_query($conn, $sql)){
            header ("location:index.php"); 
            echo "Data telah berhasil ditambahkan";
        }else{
            echo "Error".$sql."<br>".mysqli_error($conn);
        }
    }
    ?>
</body>
</html>

