<?php
session_start();
session_destroy();
header("Location: /FULLSTACK_PROJECT/auth/login.html");
exit();
?>
