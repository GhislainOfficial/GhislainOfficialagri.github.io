<?php
include('partials/header.php')
?>

    <div class="register_container">
        <div class="overlay">
         <!-- this will have not content-->
        </div> 
 
        <div class="titleDiv">
             <h1 class="title">Register</h1>
             <span class="subTitle">Thanks For Choosing Us!</span>
        </div>
 
        <!-- form Section-->
        <form action="" method="POST">
         <div class="rows grid">
             <!--User Name-->
             <div class="row">
                 <label for="username">User Name</label>
                 <input type="text" id="username" name="userName" 
                 placeholder="Enter User Name" required>
             </div>
              <!--Email Address-->
              <div class="row">
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" 
                placeholder="Enter email" required>
            </div>
             <!--Phone Number-->
             <div class="row">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" 
                placeholder="Enter your phone number" required>
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
 
                 <span class="registerLink">Have an account already? <a 
                 href="index.php">Login</a></span>
             </div>
         </div>
 
        </form>
</div>
<?php
include('partials/footer.php')
?>

<!--Let us register a new account to the database and later Login with the same account...--->

<?php
if(isset($_POST['submit'])){
    
    //variables
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    //state out query..
    $sql = "INSERT INTO admin SET
            username = '$userName',
            email = '$email',
            password = '$password',
            phone = '$phone'

    ";
    //execute our sql query...
    $res = mysqli_query($conn, $sql);
    //check if query is executed successfully
    if($res == true){
        //message to show account created successfully..
        $_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$userName.' created!</span>';
        header('location:' .SITEURL. 'index.php');
        exit();
    }
    else{
         //message to show that account failed to be created!
         $_SESSION['unSuccessful'] = '<span class="fail">Account '.$userName.' failed!</span>';
         header('location:' .SITEURL. 'register.php');
         exit();
    }
}
?>