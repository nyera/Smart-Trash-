<?php require ('../header.php');?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:../login.php");
    exit;
}
?>

<h1>     Welcome To Users Page
 </h1> 
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="../reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="../logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>


<?php require ('../footer.php');?>
