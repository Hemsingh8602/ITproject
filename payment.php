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
</head>

<body>
    <h2> Payment process </h2>
    <form  action="" name="payform" onsubmit="return pvalidate();">
        <div class="Payment ">
    Generated ID : <input type="number" name="payid" placeholder="enter the generated id" required><br><br>
            <label>
                <span>Card Holder Name</span>
                <input type="text" size="20"  name="cardname" required>
            </label>
<br><br>
            <label>
                <span>Card Number</span>
                <input type="text" size="20"  name="cardnumber" required>
            </label>
        </div>
        <br>

        <div class="form-row">
            <label>
                <span>Expiration (MM/YY)</span>
                <input type="text" size="2"  name="cardmoexp" required>
            </label>

            <span> / </span>
            <input type="text" size="2"  name="cardyrexp" required>
        </div>
        <br><br>

        <div class="form-row">
            <label>
                <span>CVV</span>
                <input type="text" size="4" data-stripe="cvv" name="cvv" required>
            </label>
        </div>
        <br><br>
        
        <input type="submit" value="Make  Payment">

</body>

<script>

function pvalidate() {
    if (document.payform.payid.value="" ){
                alert("enter proper id");
                document.regform.age.focus();
                return false;
            }
            if (document.payform.cardname.value.match(/^[A-Za-z]+$/)==false) {
                alert("enter name in alphabet");
                document.regform.name.focus();
                return false;
            }
            if (isNaN(document.payform.cardnumber.value)==1 ){
                alert("enter proper card number");
                document.regform.age.focus();
                return false;
            }
            if (isNaN(document.payform.cardmoexp.value) ){
                alert("enter proper card month expiry");
                document.regform.age.focus();
                return false;
            }
            if (isNaN(document.payform.cardyrexp.value)) {
                alert("enter proper card year expiry");
                document.regform.age.focus();
                return false;
            }
            if (isNaN(document.payform.cvv.value)) {
                alert("enter proper card cvv");
                document.regform.age.focus();
                return false;
            }

        }
</script>
</html>

<?php
    
    $cardname=$_GET['cardname'];
    $cardnumber=$_GET['cardnumber'];
    $cardmoexp=$_GET['cardmoexp'];
    $cardyrexp=$_GET['cardyrexp'];
    $cvv=$_GET['cvv'];


    $query="INSERT INTO payment VALUES ('$cardname','$cardnumber','$cardmoexp','$cardyrexp','$cvv')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"Successfully Done";
    }
    else
    {
        echo "failed to enter data in database";
    }
    
    ?>