
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<body>  
<center>  

<form id = "basic-form" action="" method="POST">  
<div id="form-container">

<?php
include 'a1connection.php';

$ids=$_GET['id'];
$show="select * from r_form where id={$ids}";
$showquery=mysqli_query($conn,$show);
$showres=mysqli_fetch_array($showquery);

if(isset($_POST['submit'])){
 $idupdate= $_GET['id'];
 $Fname=$_POST['Firstname'];
 $Lname=$_POST['Lastname'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $password=$_POST['password'];

$updateq="UPDATE `r_form` SET `id`=' $idupdate',`Firstname`=' $Fname',`lastname`=' $Lname',`phone`=' $phone',`email`=' $email',`password`=' $password' WHERE id= $idupdate ";
$query= mysqli_query($conn,$updateq);
 if( $query){
    header('location:a3display.php') ;
 }else{
    echo"not updated";
 }

}
?>

<p>
<label for= "name">Enter First Name </span> </label>  
<input type="text" placeholder="Enter First Name" name="Firstname" value="<?php echo $showres['Firstname'];?>">
</p>
<p>
<label for = "name">Enter Last Name <span> </span> </label>  
<input type="text" placeholder="Enter Last Name" name="Lastname" value="<?php echo $showres['Lastname'];?>" >
</p>
<p>
<label for = "tel">Enter Your Mobile Number <span> </span> </label>  
<input type = "tel" placeholder="Enter Your Mobile Number" name="phone" value="<?php echo $showres['phone'];?>" >  
</p>
<p>
<label for="email"> E-Mail </span> </label>  
<input id="email" placeholder="Enter Your  E-Mail" type="email" name="email" value="<?php echo $showres['email'];?>" >  
</p>  

<p>  
<label for="password"> Password </label>  
<input type="password" name="password" placeholder="Enter Your password" value="<?php echo $showres['password'];?>" >  
</p>
  
<input class="submit" type="submit" name="submit" value="update">  
</div>
</form>  
</center>


</html