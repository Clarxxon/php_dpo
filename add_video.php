<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }

    //add video
    $request_number=$_POST['request_number'];
    $video_name=$_POST['video_name'];
    $video_format=$_POST['video_format'];
    $video_genre=$_POST['video_genre'];
    $video_description=$_POST['video_description'];

    $id_user=$_SESSION['id_user'];

    $q="INSERT INTO `video`(`request_number`, `video_name`, `video_format`, `video_genre`,`video_description`,`operator_id`) VALUES ($request_number, '$video_name', '$video_format', '$video_genre','$video_description','$id_user')";

    //echo $q;
    if($request_number && $video_name && $video_format && $video_genre && $video_description){
        $connection->exec($q);
        $q="UPDATE `reques` SET `request_state` = 'выполняется' WHERE `reques`.`request_number` = $request_number;";
        $connection->exec($q);
        echo "<p>Видео успешно создано)</p>";
    }

?>

	<div class="container-fluid">


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Мои видео</h2>
            <hr>
        </div>
    </div>

        <form class="form-horizontal" role="form" method="POST" >
           
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Название видео</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="video_name" class="form-control" id="name"
                                placeholder="Выпуск влога для Макса №15" required autofocus>
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
                    <label for="last_name">Формат видео</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="video_format" class="form-control" id="last_name"
                                placeholder="4к 60fps" required autofocus>
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
                    <label for="email">Жанр</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="video_genre" class="form-control" id="email"
                                placeholder="vlog" required autofocus>
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
                    <label for="email">Описание</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="video_description" class="form-control" id="email"
                                placeholder="Небольшое описание в пару слов" required autofocus>
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

            <label for="exampleFormControlSelect4">Выберите заказ для выполнения</label>
                <select class="form-control" id="exampleFormControlSelect4" name="request_number">
                <?
                
                $sql = "SELECT * FROM `reques` WHERE reques.request_state='новый'";

                foreach($connection->query($sql) as $key=>$row) 
                {
                    echo '<option value='.$row['request_number'].'>'."Заказ номер ".$row['request_number'].'</option>';
                }

                ?>
        </select>
           
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Создать видео</button>
                    <a href="profile_operator.php" class="btn btn-success"><i class="fa fa-user-plus"></i> Назад</a>
                </div>
            </div>
           
        </form>

        

    </div>



 <? include('footer.php')?>
		