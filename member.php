<?php
    include("my.php");
   error_reporting(0);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
            background-image: url(bg2.jpg);
        }
        h1{
            text-align: center;
            background-color: rebeccapurple;
        }
        input{
            margin: 10px 590px;
            width: 200px;
        }
        button{
            font-size:15px;
            margin: 10px 350px;
        }
            </style>
</head>
<body>
    <h1>Enter Your ID to know your info </h1>
    <form action="" name="idform">
        <input type="text" name="idcheck">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php
$id;
$name;
$age;
$address;
$email;
$mypack;
$gender;
$idcheck = isset($_GET['idcheck']) ? $_GET['idcheck'] : '';

$sql = " SELECT id, name, age, locality, email, pack, gender from registration WHERE id=$idcheck";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $id=$row["id"];
        $name=$row['name'];
        $age=$row['age'];
        $address=$row['locality'];
        $email=$row['email'];
        $mypack=$row['pack'];
        $gender=$row['gender'];

    }
    echo "id = ".$id;
    echo "<br> name = ".$name;
    echo "<br> age = ".$age;
    echo "<br> address = ".$address;
    echo "<br> email = ".$email;
    echo "<br> mypack = ".$mypack;
    echo "<br> gender = ".$gender;
     
}


mysqli_close($conn);

?>