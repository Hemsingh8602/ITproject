<?php
    include("my.php");
    error_reporting(0);
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registraion form</title>
    <style>
        body {
            font-family: cursive;
            color: white;
            margin: 0px;
            padding: 0px;
            background: url(6.jpg)no-repeat center center/cover;
        }

        div {
            margin: 10px auto;
            text-align: center;
            display: block;
            width: 400px;
            padding: 5px;
            font-size: 20px;
            /* border: 2px solid black; */
        }

        input {
            font-size: 20px;
        }

        /* label{
            margin: 10px 300px;
        } */
        .container h1 {
            text-align: center;
        }

        .container button {
            display: block;
            width: 80%;
            margin: 20px auto;
            font-size: 20px;
            background-color: lightslategray;
  font-weight: bolder;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Join the Best GYM in Town</h1>
        <form action="" name="regform" onsubmit="return(validate());">
            <div class="form">
                <input type="text" name="name" placeholder="Enter your name" >
            </div>
            <div class="form">
                <input type="text" name="age" placeholder="Enter your Age" >
            </div>
            <div class="form">
                <input type="text" name="address" placeholder="Enter your Locality">
            </div>
            <div class="form">
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form">
                <label for="pack">Select Pack</label>
                <select name="mypack" id="pack">
                    <option value="onemonth">1 Month/700rs</option>
                    <option value="threemonth">3 Month/2000rs</option>
                    <option value="sixmonth">6 Month/3500rs</option>
                    <option value="twelvemonth">12 Month/6000rs</option>
                </select>
            </div>
            <div class="form">
                Gender :male <input type="radio" name="gender" value="m">
                female <input type="radio" name="gender" value="f">
            </div>
            <button class="btn">  Submit</button>
        </form>
        <button class="pay"> <a href="payment.php">Click to Pay If ID generated</a> </button>
    </div>

    <script>
        function validate() {
            if (document.regform.name.value == "" || document.regform.name.value.match(/^[A-Za-z]+$/)==true) {
                alert("name cant be blank");
                document.regform.name.focus();
                return false;
            }
            if (isNaN(document.regform.age.value) || document.regform.age.value < 0 || document.regform.age.value == "") {
                alert("enter proper age detail in number");
                document.regform.age.focus();
                return false;
            }
            if (document.regform.address.value == "") {
                alert("address cant be blank");
                document.regform.name.focus();
                return false;
            }
            var email = document.regform.email.value;
            atpos = email.indexOf("@");
            lastpos = email.lastIndexOf(".");
            if (email == "" || atpos < 1 || (lastpos - atpos < 2)) {
                alert("enter correct email");
                document.regform.name.focus();
                return false;
            }
            if ((document.regform.gender[0].checked == false) && (document.regform.gender[1].checked == false)) {
                alert("Please choose your Gender: Male or Female");
                return false;
            }
        }
    </script>
</body>
</html>

<?php
    
    $name=$_GET['name'];
    $age=$_GET['age'];
    $address=$_GET['address'];
    $email=$_GET['email'];
    $mypack=$_GET['mypack'];
    $gender=$_GET['gender'];

    $id;
    $counter=0;
    
    $test = isset($_GET['email']) ? $_GET['email'] : '';
    if($test)
    {

    $query="INSERT INTO registration VALUES ('','$name','$age','$address','$email','$mypack','$gender')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "Successfully ";
    }
    else
    {
        echo "failed to enter data in database";
    }

   

    $sql = " SELECT id, name, age, locality, email, pack, gender from registration";
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
        echo "ïd = ".$id;
    }
    }

mysqli_close($conn);


    ?>