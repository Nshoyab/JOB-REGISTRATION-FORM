

<html>
<style>
 
    </style>
    <head>
        <script src="https://kit.fontawesome.com/3de21206c9.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>

    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>phone</th>
      <th>email</th>
      <th>password</th>
      <th colspan="2">Alter</th>
    </tr>
  </thead>

  <tbody>

  <?php

      include 'a1connection.php';
      $selectquery="SELECT * FROM r_form";
      
      $query= mysqli_query($conn,$selectquery);
      while ($res= mysqli_fetch_array($query)) {
        ?>
    <tr>
                        <th><?php echo $res['id'];?></th>
                        <th><?php echo $res['Firstname'];?></th>
                        <th><?php echo $res['Lastname'];?></th>
                        <th><?php echo $res['phone'];?></th>
                        <th><?php echo $res['email'];?></th>
                        <th><?php echo $res['password'];?></th>
                        <th><a href="update.php?id=<?php echo $res['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a></th> 
                        <th><a href="delete.php?id=<?php echo $res['id'];?>"><i class="fa-solid fa-trash"></i></a></th>
        
<?php
      }

?>
   
  </tbody>
</table>
        
    </body>
</html>
