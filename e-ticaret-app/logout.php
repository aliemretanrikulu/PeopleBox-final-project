<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit; ?>

<?php 

setcookie(("username"),$username, time() - (60*60)); 
setcookie(("login"),true, time() - (60*60));
header('Location: index.php');

?>
