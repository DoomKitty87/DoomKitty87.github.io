<?php
//Check if user has submitted the form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ('admin' == $username) {
        if ($password == 'ida2025') {
            session_start();
            $_SESSION['loggedin'] = 'true';
            header('Location: admin.php');
            die;
        }
        else {
            echo "<div class='alert alert-danger' role='alert'>
            Incorrect Password.
            </div>";
        }
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>
        Invalid Username.
        </div>";
    }
}
?>
<html>
<body>
<form action="" method="post">
           <br>
           <div class="form-root">
               <label for="username"><h4 class="text-info mr-1">Enter Username</h4></label>
               <input type="text" name="username" id="username" required>
           </div>
           <br>
           <div class="form-root">
               <label for="password"><h4 class="text-info mr-1">Enter Password</h4></label>
               <input type="password" name="password" id="password" required>
           </div>
           <br>
           <button type="submit" class="btn btn-info" name="login"><h1>Login</h1></button>
       </form>
</body>
</html>
