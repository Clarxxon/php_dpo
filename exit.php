<?
session_start();
unset($_SESSION['email_user']);
session_write_close();
include('index.php');
?>