<?php
session_start();
session_destroy();
setcookie ("stkn", "", time()-3600, '/');
header('Location: Login.php');
?>