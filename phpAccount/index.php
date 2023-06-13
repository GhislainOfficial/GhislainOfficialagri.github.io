<?php
include('partials/header.php')
?>
    <?php
    if(isset( $_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset( $_SESSION['accountCreated']);
    }

    ?>



    <div class="form_container">
       <div class="overlay">
        <!-- this will have not content-->
       </div> 

       <div class="titleDiv">
            <h1 class="title">Login</h1>
            <span class="subTitle">Welcome back!</span>
       </div>



    <?php
        if(isset($_SESSION['noAdmin'])){
            echo $_SESSION['noAdmin'];
            unset($_SESSION['noAdmin']);
        }
    ?>


       <!-- form Section-->
       <form action="" method="POST">
        <div class="rows grid">
            <!--User Name-->
            <div class="row">
                <label for="username">User Name</label>
                <input type="text" id="username" name="userName" 
                placeholder="Enter User Name" required>
            </div>
             <!--Password-->
             <div class="row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" 
                placeholder="Enter password" required>
            </div>
            <!--Submit Button-->
            <div class="row">
                <input type="submit" id="submitBtn" name="submit" 
                value="Login" required>

                <span class="registerLink">Don't have an account? <a 
                href="register.php">Register</a></span>
            </div>
        </div>

       </form>
    </div>
<?php
include('partials/footer.php')
?>


<!--Let Login to Database-->
<?php
if(isset($_POST['submit'])){
//  echo 'Yes data submitted';

//Let us create variables to store user name and password
$userName = $_POST['userName'];
$passWord = $_POST['password'];

//sql to select if there's the details in the database
$sql = "SELECT * FROM admin WHERE username = '$userName' AND password = '$passWord'";
//Execute the query
$result = mysqli_query($conn, $sql);

//Count the number of account with the same username and password
$count = mysqli_num_rows($result);
//Put the count results into one associate array
$row = mysqli_fetch_assoc($result);

//Check if there's at least one account in the database
if($count ==1){
    //message to welcome admin to the dashboard
    $_SESSION['loginMessage'] = '<span class="success">Thank you '.$userName.' for Logging In</span>';
    header('location:' .SITEURL. 'AGRIPRENEUR.php');
    exit();
}
else{
    //message if the admin/account is not in the database....
    $_SESSION['noAdmin'] = '<span class="fail">'.$userName.' is not registered! </span>';
    header('location:' .SITEURL. 'index.php');
    exit();
}
}

?>