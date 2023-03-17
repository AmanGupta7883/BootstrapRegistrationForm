<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php  

   include 'partials/_nav.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
   
   include 'partials/_dbConnection.php';

   $username = $_POST['username'];
   $Adress = $_POST['Adress'];
   $Phone = $_POST['Phone'];

   
    if (($Adress&&$username&&$Phone)!=null) {

        
       $sql = "INSERT INTO `userdata` ( `username`, `Adress` ,`Phone`) VALUES ( '$username', '$Adress', '$Phone')";

        $result= mysqli_query($con,$sql);
          if ($result) {
         echo '
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Account Created Successfully</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
         }else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
         mysqli_error($con);
        } 
        }

    }else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Please fill all the details carefully.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
      
    

 

?>
<div class="container w-50 mt-3">
    
<div class="container w-50">
<form action="/registrationform/userregistration.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="AdressHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone1" class="form-label">Adress</label>
    <input type="Adress" class="form-control" id="exampleInputAdress" name="Adress" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone1" class="form-label">Phone</label>
    <input type="Phone" class="form-control" id="exampleInputPhone" name="Phone" require>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Terms and Conditions</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Register</button>
</form>
</div>
 </div>
    




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</body>
</html>