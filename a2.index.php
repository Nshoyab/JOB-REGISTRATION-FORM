<! DOCTYPE html>  
<html>  
<head>  
<title>  
JQuery validation example 1  
</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<head>  
<style>  
        body{
            background-color: bisque;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        #form-container{
            background-color: white;
            padding: 50px;
            text-align: center;        
        }
        #headsection{
            margin:0px 0px 10px 0px;
        }
        input{
            width:200px;
            margin: 10px 0px;
            padding: 10px;  
        }
        input[type="submit"]{
            width:222px;
            background-color: red;
            border: 0px;
            color: white;
        }
        .error{
            color: red;
            margin:0%;
            text-align: center;
        }
    </style>  
</head>  
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> --> 

<body>  
<center>  


<form id = "basic-form" action="" method="POST">  
<div id="form-container">
<p>
<label for= "name">Enter First Name </span> </label>  
<input type="text" placeholder="Enter First Name" name="Firstname" value="" >
</p>
<p>
<label for = "name">Enter Last Name <span> </span> </label>  
<input type="text" placeholder="Enter Last Name" name="Lastname" value="" >
</p>
<p>
<label for = "tel">Enter Your Mobile Number <span> </span> </label>  
<input type = "tel" placeholder="Enter Your Mobile Number" name="phone" value="" >  
</p>
<p>
<label for="email"> E-Mail </span> </label>  
<input id="email" placeholder="Enter Your  E-Mail" type="email" name="email" value="" >  
</p>  

<p>  
<label for="password"> Password </label>  
<input type="password" name="password" placeholder="Enter Your password" value="" >  
</p>
  
<input class="submit" type="submit" name="submit" value="SUBMIT"> <br><br>

<a href="a3display.php">check here</a>  
</div>
</form>  
</center>

<?php
include 'a1connection.php';

if(isset($_POST['submit'])){

 $Fname=$_POST['Firstname'];
 $Lname=$_POST['Lastname'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 $insert="INSERT INTO `r_form`(`Firstname`,`lastname`,`phone`,`email`,`password`) VALUES ('$Fname','$Lname','$phone','$email','$password')";
 $mysql=mysqli_query($conn,$insert);
 if( $mysql){
    header('location:a3display.php');
 }else{
    echo"no";
 }

}
?>
</html