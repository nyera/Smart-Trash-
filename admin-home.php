<?php require ('header.php');?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<div class="user-page ">
    <h1 class="text-center"> Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <div class="content">
                <img src="images/bin (1).png" width="10%" height="10%"/>
                <br/>
                <button type="button" class="btn btn-danger my-2">Full </button>
                 </div>
            </div>
            <div class="col-6">
            <div class="content">
            <img src="images/garbage.png" width="10%" height="10%"/>
            <br/>
            <button type="button" class="btn btn-success my-2"> Empty </button>

                 </div>

            </div>
         </div>    

    </div>
    <div class="empty text-center">
        <p> Send a notification if there is a full bin </p>
     </div>
    
     <div class="controls text-center">
     <a href="reset-password.php" class="btn btn-info">Reset Your Password</a>
     <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
</div>
</div>


<?php require ('footer.php');?>
