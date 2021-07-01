Logout.php
<?php 

session_start();
session_destroy();

header("Location: Admin_Login.php");

?>