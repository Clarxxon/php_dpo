<?include('header.php');
include('/database/connection.php');

?>

	<div class="container-fluid">

        <form method="POST" action="request_confirm.php">
            <!-- div class="form-group">
                <label for="exampleFormControlInput1">Телефон для связи</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="+7 999 222-22-22">
                <small>*пожалуйста, укажите свой мобильный телефон, чтобы мы могли вам перезвонить и уточнить детали заказа)</small>
            </div -->
           

            <div class="form-group">
                <label for="exampleFormControlSelect2">Выберите услуги</label>
                <select class="form-control" id="exampleFormControlSelect2" name="prices">
                <?$sql = 'SELECT * FROM price_list';


                foreach($connection->query($sql) as $key=>$row) 
                {
                    echo '<option value='.$row['service_id'].'>'.$row['service_name'].'</option>';
                }

                ?>
                </select>
                <label for="exampleFormControlSelect3">Выберите партнёрскую программу</label>
                <select class="form-control" id="exampleFormControlSelect3" name="program">
                <?$sql = 'SELECT * FROM partner_program INNER JOIN partner ON partner.partner_id=partner_program.partner_id';


                foreach($connection->query($sql) as $key=>$row) 
                {
                    echo '<option value='.$row['program_id'].'>'.$row['program_info'].' - '.$row['partner_name'].'</option>';
                }

                ?>
                </select>
            </div>

            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Сделать заказ</button>
            </div>
        </div>
        </form>
    </div>



 <? include('footer.php')?>
		