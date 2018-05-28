<?include('header.php');
include('/database/connection.php');

$price=$_POST['prices'];
$program=$_POST['program'];
?>

	<div class="container-fluid">
    
        <?if(!$price) echo "Выберите услугу!";
        else{
            $id_user=$_SESSION['id_user'];
            $request_date=date('Y-m-d H:i:s');
            $request_cost=$price;
            $request_state="новый";
            $program_id=$program;

            $q = "INSERT INTO `reques`(`id_user`, `program_id`, `request_date`, `request_cost`, `request_state`) VALUES ( $id_user, '$program_id', '$request_date','$request_cost','$request_state')";
            $connection->exec($q);
            echo "Заказ создан!";
        }
        
        ?>
    </div>




 <? include('footer.php')?>
		