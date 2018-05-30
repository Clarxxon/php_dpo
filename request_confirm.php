<?include('header.php');
include('/database/connection.php');

$service_id=$_POST['prices'];
$program=$_POST['program'];

$q="SELECT * FROM price_list WHERE service_id=$service_id";

$row=$connection->query($q)->fetch(PDO::FETCH_LAZY);
$price = $row['service_cost'];

?>
	<div class="container-fluid">
    
        <?if(!$price) echo "Выберите услугу!";
        else{
            $id_user=$_SESSION['id_user'];
            $request_date=date('Y-m-d H:i:s');
            $request_cost=$price;
            $request_state="новый";
            $program_id=$program;

            $q = "INSERT INTO `reques`(`id_user`, `program_id`, `request_date`, `request_cost`, `request_state`, `service_id`) VALUES ( $id_user, '$program_id', '$request_date','$request_cost','$request_state', '$service_id')";
            $connection->exec($q);
            echo "Заказ создан!";
        }
        
        ?>
    </div>

 <? include('footer.php')?>
		