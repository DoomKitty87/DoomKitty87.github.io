<?php
session_start();
if ($_SESSION['loggedin'] != "true") {
    header("Location: index.html");
    die;
}
?>
<html>
<body>
  hi
</body>
</html>
