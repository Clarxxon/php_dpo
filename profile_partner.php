<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }

    //add partner
    $partner_name=$_POST['partner_name'];
    $partner_info=$_POST['partner_info'];
    $partner_youtube=$_POST['partner_youtube'];

    $id_user=$_SESSION['id_user'];

    $q="INSERT INTO `partner`(`id_user`, `partner_name`, `partner_info`, `partner_youtube`) VALUES ($id_user, '$partner_name', '$partner_info', '$partner_youtube')";

    if($partner_info && $partner_name && $partner_youtube){
        $connection->exec($q);
    }

?>

	<div class="container-fluid">

        <form class="form-horizontal" role="form" method="POST" action="/user_action/register.php">
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
                                placeholder="John" required autofocus>
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
                                placeholder="Doe" required autofocus>
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
                    <label for="email">E-Mail</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <!-- Put e-mail validation error messages here -->
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
                                placeholder="Москва, ул.Московская, 32" required>
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
            <h2>Мои бренды</h2>
            <hr>
        </div>
    </div>

        <form class="form-horizontal" role="form" method="POST" action="">
           
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
                                <!-- Put name validation error messages here -->
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
                                <!-- Put name validation error messages here -->
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
                                <!-- Put e-mail validation error messages here -->
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

    <div class="card-group">
                <?php

                    $sql = 'SELECT * FROM partner';


                    foreach($connection->query($sql) as $key=>$row) {?>

                    <div class="card">

                        <iframe width="100%" height="40%" src="<?=$row['partner_youtube'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></iframe>
                        
                        <d class="card-body">
                        <h5 class="card-title"><?=$row['partner_name'];?></h5>
                        <p class="card-text"><?=$row['partner_info'];?></p>
                        <p class="card-text"><small class="text-muted"><a href="">добавить программу сотрудничества</a></small></p>
                    </div><br/>
                    
                <?}?>
    </div>

    </div>



 <? include('footer.php')?>
		