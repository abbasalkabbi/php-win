<?php
// include config 
include_once '../php/inc/config.php';
session_start();
// check if you admin or not admin
if(!$_SESSION['adminid']){
    // if not admin 
    // go to page sigin 
    header('location: index.php');
}
// signout
if(isset($_POST['signout'])){
    session_destroy();
}
// delete user
$id = $_POST['id'];
     // check if empty id 
    if(!empty($id)){
  // if not empty 
  // delete user by id 
    $delete= "DELETE FROM users WHERE id= '{$id}'";
    // check deleted
    if (mysqli_query($conn, $delete)) {
        // if delete is okey
        // print on scrren  delete 
  echo " <div class='container'>
        <div class='
            form-floating
            mb-3
            mt-3
            p-3
            mb-2
            bg-danger
            text-white
            shadow-lg
          ' id='error'>
            <h1 class='text-center'>DELETE</h1>
        </div>
        </div>
      ";
} else {
    // if delete error
  echo "Error deleting record: " . mysqli_error($conn);
}

    }//end check if empty 


?>
<!----END PHP---->
<!---HTML--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <link rel="stylesheet" href="./style.css">
    <title>PHP admin</title>
</head>

<body class="bg-gradient bg-light">

    <!------container--->
    <div class="container">
        <!---header--->

        <form action="#" method='POST' class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Hi ,<?php echo $_SESSION['adminid'];?></h1>
            <!--- logn out---->
            <button type="submit" class="btn btn-danger" name="signout">SignOut</button>
        </form>
        <!---End header--->
        <!-- users ParticiPants -->
        <form action="#" method='POST' class="users list-group list-group-numbered mt-5 mb-4">
            <div class="
            form-floating
            mb-1
            mt-1
            p-3
            mb-2
            bg-primary
            text-white
            shadow-lg
          ">
                <h1 class="text-center">ParticiPants</h1>


            </div>

        </form>
        <!-- end users ParticiPants -->
    </div>
    <!------end container--->
    <script src="admin.js"></script>
</body>

</html>