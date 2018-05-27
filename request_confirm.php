<?include('header.php');
include('/database/connection.php');

$price=$_POST['prices'];
$program=$_POST['program'];
?>

	<div class="container-fluid">
    
        <?if(!$price) echo "Выберите услугу!";
        else{
            $id_user=$_SESSION['id_user'];
            $request_date=time();
            $request_cost=$price;
            $request_state="новый";
            $program_id=$program;
        }
        
        ?>
    </div>




 <? include('footer.php')?>
		