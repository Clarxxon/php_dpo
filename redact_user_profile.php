<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }
    $id_user=$_SESSION['id_user'];

    //set user data 
    $name_user_=$_POST['name'];
    $last_name_user_=$_POST['last_name'];
    $user_adres_=$_POST['user_adres'];

    if($name_user_ && $last_name_user_ && $user_adres_){
        $q="UPDATE user_ SET name_user='$name_user_',last_name_user='$last_name_user_',user_adres='$user_adres_' WHERE id_user=$id_user";
        //print_r($q);
        $row=$connection->exec($q);
        redTo('profile.php');
    }
?>