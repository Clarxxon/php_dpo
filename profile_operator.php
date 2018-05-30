<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }

    $id_user=$_SESSION['id_user'];
    // get user data
    $q="SELECT * FROM user_ WHERE id_user=$id_user";
    $row=$connection->query($q)->fetch(PDO::FETCH_LAZY);
    $name_user=$row['name_user'];
    $last_name_user=$row['last_name_user'];
    $user_adres=$row['user_adres'];

    //add partner
    /*$partner_name=$_POST['partner_name'];
    $partner_info=$_POST['partner_info'];
    $partner_youtube=$_POST['partner_youtube'];

    $id_user=$_SESSION['id_user'];

    $q="INSERT INTO `partner`(`id_user`, `partner_name`, `partner_info`, `partner_youtube`) VALUES ($id_user, '$partner_name', '$partner_info', '$partner_youtube')";

    if($partner_info && $partner_name && $partner_youtube){
        $connection->exec($q);
    }*/

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


        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Доступные заказы</h2>
                <hr>
            </div>
        </div>

        <p class="card-text"><a href="add_video.php">Добавить видео</a></p>

    <!--   <form class="form-horizontal" role="form" method="POST" action="">
           
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Имя</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="partner_name" class="form-control" id="name"
                                placeholder="John" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="last_name">Информация</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="partner_info" class="form-control" id="last_name"
                                placeholder="Doe" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                               
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">YouTube</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="partner_youtube" class="form-control" id="email"
                                placeholder="YouTube http-ref" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                               
                            </span>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Создать бренд</button>
                </div>
            </div>
        </form>
    -->
        <div class="list-group">
            <?php

                $sql = "SELECT * FROM `reques` WHERE reques.request_state='новый'";

                foreach($connection->query($sql) as $key=>$row) {?>

                    <a href="#" class="list-group-item list-group-item-action">Заказ номер <?=$row['request_number']?>  на <?=$row['request_cost']?> рублей</a>
                
            <?}?>
        </div>

    </div> 

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Мои видео</h2>
            <hr>
        </div>
    </div>
    <div class="list-group">
            <?php
                $id_user=$_SESSION['id_user'];
                $sql = "SELECT * FROM `video` WHERE video.operator_id=$id_user";

                foreach($connection->query($sql) as $key=>$row) {?>

                    <a href="video_redact.php?video_id=<?=$row['video_id']?>&request_number=<?=$row['video_id']?>" class="list-group-item list-group-item-action"><?=$row['video_name']?>  <?=$row['video_genre']?>
                    <span class="glyphicon glyphicon-cog"></span>
                    </a>
                
                <?}?>
        </div>

    </div>


 <? include('footer.php')?>
		