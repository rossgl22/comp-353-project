<?php

session_start();
session_unset();
session_destroy();
?>
<html>
<h3>You are now logged out <a href="login.php">login in</a></h3>
</html>