<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
    echo "<script> window.location.replace('$value'); </script>";
    }


    if($_SESSION['user_type']  == '2')
    {
        redTo('profile_operator.php');
    }
    if($_SESSION['user_type']  == '3')
    {
        redTo('profile_partner.php');
    }

    $id_user=$_SESSION['id_user'];

    // get user data
    $q="SELECT * FROM user_ WHERE id_user=$id_user";
    $row=$connection->query($q)->fetch(PDO::FETCH_LAZY);
    $name_user=$row['name_user'];
    $last_name_user=$row['last_name_user'];
    $user_adres=$row['user_adres'];

?>

	<div class="container-fluid">

        <form class="form-horizontal" role="form" method="POST" action="redact_user_profile.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Личный кабинет</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Имя</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="John" required autofocus value="<?=$name_user?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <!-- Put name validation error messages here -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="last_name">Фамилия</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="last_name" class="form-control" id="last_name"
                                placeholder="Doe" required autofocus  value="<?=$last_name_user?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <!-- Put name validation error messages here -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="adres">Адрес</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="text" name="user_adres" class="form-control" id="adres"
                                placeholder="Москва, ул.Московская, 32" required  value="<?=$user_adres?>">
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Сохранить изменения</button>
                </div>
            </div>
        </form>

    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Мои заказы</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="create_request.php" class="btn btn-success">Сделать заказ</a>
        </div>
    </div>

    <div class="list-group">
    <?php

    $sql = 'SELECT * FROM reques INNER JOIN partner_program WHERE reques.id_user='.$_SESSION['id_user'].' and reques.program_id=partner_program.program_id';


    foreach($connection->query($sql) as $key=>$row) {?>

        <? if ($row['request_state']=='новый'):?>
            <a href="#" class="list-group-item list-group-item-action">Заказ №<?=$row['request_number']?> сроком действия рекламы на <?=$row['program_time']?> месяцев ожидает выполнения</a>
        <? endif;?>

        <? if ($row['request_state']=='выполняется'):?>
            <a href="#" class="list-group-item list-group-item-warning">Заказ №<?=$row['request_number']?> сроком действия рекламы на <?=$row['program_time']?> месяцев выполняется</a>
        <? endif;?>

        <? if ($row['request_state']=='готов'):?>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success">Заказ №<?=$row['request_number']?> выполнен</a>
        <? endif;?>

    <?}?>
        
    </div>



 <? include('footer.php')?>
		