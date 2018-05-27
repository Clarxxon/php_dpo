<?php
class Session{
public function __construct()
{
session_start();
}
public function create($key,$value){
return $_SESSION[$key] = $value;
}
public function delete($key)
{
unset($_SESSION[$key]);
}
public function is_set($key){
return isset($_SESSION[$key]);
}
}
?>