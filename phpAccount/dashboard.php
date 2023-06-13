<?php
include('partials/headerdash.php')
?>

    <div class="dashboard">
        <span>
         <?php
         if(isset($_SESSION['loginMessage'])){
            echo $_SESSION['loginMessage'];
            unset($_SESSION['loginMessage']);
         }
         ?>
        </span>
        <h1>"God bless and Happy Farming"</h1>
        <div class="logOutBtn">
            <a href="logOut.php">Log Out</a>

        </div>
    </div>

<?php
include('partials/footer.php')
?>