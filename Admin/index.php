<?php
include_once '../php/inc/config.php';
session_start();
// check if you signin
if($_SESSION['adminid']){
    // if signin
    // go to dashbored admin
    header('location: admin.php');
}



// check if click on signin 
if(isset($_POST['signin'])){
    // if click 
  // hendle parm
  $adminuser= $_POST['adminuser'];// user admin
  $adminpass= $_POST['adminpass'];// password admin
  // check if index is empty 
  if(!empty($adminpass) && !empty($adminuser)){
    // if parm is not empty 
    // check is user name and pass is correct 
    $sign_check= mysqli_query($conn ,"SELECT * FROM admin WHERE adminuser ='{$adminuser}' AND adminpass = '{$adminpass}'");
  
    if(mysqli_num_rows($sign_check) > 0){
        
            // if is sing in is okey
            header('location: admin.php');
            $_SESSION['adminid']=$adminuser;
        }
  }
}// end check if click on sigin 

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <title>Sigin admin</title>
</head>

<body class='bg-gradient bg-light'>
    <!--container-->
    <div class="container ">
        <!--header-->
        <!---sign in-->
        <div class="col-md-5 p-lg-5 mx-auto my-5 text-center ">
            <h1>Admin <span class="badge bg-secondary">sign in</span></h1>

        </div>
        <form action="#" class="signin" method="POST">
            <!--- email -->
            <div class="form-floating mb-3 mt-3 shadow">
                <input type="text" name="adminuser" class="form-control" id="floatingInput"
                    placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
            </div>
            <!--- ENd email -->
            <!-- First name-->
            <div class="form-floating mb-3 shadow">
                <input type="text" name="adminpass" class="form-control" id="Password" placeholder="Password" />
                <label for="firstname">Password</label>
            </div>
            <!-- END First name-->
            <!---submit-->
            <br />
            <div class="d-grid gap-2">
                <button type="submit" class="
              btn btn-primary
              text-center
              shadow-lg
            " id="singin" name="signin">
                    Signin
                </button>
            </div>
            <!--end submit-->
        </form>
    </div>
    <!---END container-->
    <!--link js sign in admin-->
    <script src="./signin.js"></script>
</body>

</html>