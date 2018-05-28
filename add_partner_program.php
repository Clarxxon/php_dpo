<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }

    $partner_id = $_GET['partner_id'];
 
    $program_info=$_POST['program_info'];
    $program_time=$_POST['program_time'];
   

    $id_user=$_SESSION['id_user'];

    $q="INSERT INTO `partner_program`(`partner_id`, `program_time`, `program_info`) VALUES ( $partner_id, '$program_time', '$program_info')";

    if($program_info && $program_time && $partner_id){
        $connection->exec($q);
    }
?>

	<div class="container-fluid">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Программы сотрудничества</h2>
                <hr>
            </div>
        </div>

        <form class="form-horizontal" role="form" method="POST" action="">
           
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Срок действия, мес.</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="number" name="program_time" class="form-control" id="name"
                                placeholder="1" required autofocus>
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
                            <input type="text" name="program_info" class="form-control" id="last_name"
                                placeholder="каковы ваши условия?" required autofocus>
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i>Добавить программу</button>
                </div>
            </div>
        </form>

    </div>



 <? include('footer.php')?>
		