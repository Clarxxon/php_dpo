<?include('header.php');
include('/database/connection.php');
?>

	<div class="container-fluid">

        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Телефон для связи</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="+7 999 222-22-22">
                <small>*пожалуйста, укажите свой мобильный телефон, чтобы мы могли вам перезвонить и уточнить детали заказа)</small>
            </div>
           

            <div class="form-group">
                <label for="exampleFormControlSelect2">Выберите услуги</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                <?$sql = 'SELECT * FROM price_list';


                foreach($connection->query($sql) as $key=>$row) 
                {
                    echo '<option>'.$row['service_name'].'</option>';
                }
                ?>
                </select>
            </div>
        </form>
    </div>



 <? include('footer.php')?>
		