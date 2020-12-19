<?php
    session_start();
    require 'includes/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <?php
// including the database connection file
require 'includes/db.php';
if(isset($_POST['save']))
{   
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    // checking empty fields
    if(empty($firstname) || empty($middlename) || empty($lastname) || empty($address) || empty($email) || empty($contact) || empty($username) || empty($password)) {    
            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty!</font><br/>";
        }

        if(empty($middlename)) {
            echo "<font color='red'>Middlename field is empty!</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty!</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

        if(empty($contact)) {
            echo "<font color='red'>Contact field is empty!</font><br/>";
        }
        
        if(empty($username)) {
            echo "<font color='red'>Username field is empty!</font><br/>";
        }    

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }    
    } else {    
        //updating the table
        $query = "INSERT INTO users (firstname, middlename, lastname, address, email, contact, username, password) 
                VALUES ('$firstname','$middlename','$lastname','$address','$email','$contact','$username','$pass1')";

        $result = mysqli_query($con,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
        header("refresh:0; url=index.php");
        }
        
    }
}
?>
   
          <h2> SignUp</h2>
    <div class="row animated shake">
        <div class="col-lg-4 col-sm-offset-4">
        
            <form action="" method="post">
        <table class="table table-bordered">
            <tr>
                <td><label for=""> First</label></td>
                <td> <input type="text" name="firstname"></td><br>
                
            </tr>
            <tr>
                <td><label for=""> Middlename</label></td>
                <td><input type="text" name="middlename"></td><br>
                
            </tr>
            <tr>
                <td><label for=""> Lastname</label></td>
                <td> <input type="text" name="lastname"></td>
            </tr>
            <tr>
                        <td><label for=""> Email</label></td>
                        <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                        <td><label for=""> Address</label></td>
                        <td> <input type="text" name="address"></td>
            </tr>
            <tr>
                        <td><label for=""> Contact</label></td>
                        <td> <input type="text" name="contact"></td>
            </tr>
            <tr>
                        <td><label for=""> Username</label></td>
                        <td> <input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                        <td><label for=""> Password</label></td>
                        <td> <input type="password" id="password"  name="password"></td>
            </tr>
            <tr>
                <td class="text-center" colspan="2" > <input class="btn btn-info" type="submit" value="Create Account" name="save"></td>
                
            </tr>
            
        </table>

        
    </form>
    
    <br>
        


    </div>

    </div>
            

    
        
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>