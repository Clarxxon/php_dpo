<?include('header.php');
include('/database/connection.php');
?>

	<div class="container-fluid">

        <div class="card-group">
                <?php

                    $sql = 'SELECT * FROM partner';


                    foreach($connection->query($sql) as $key=>$row) {?>

                    <div class="card">

                        <iframe width="100%" height="40%" src="<?=$row['partner_youtube'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></iframe>
                        
                        <d class="card-body">
                        <h5 class="card-title"><?=$row['partner_name'];?></h5>
                        <p class="card-text"><?=$row['partner_info'];?></p>
                    </div>
                    

                <?}?>
        
        </div>	
    </div>



 <? include('footer.php')?>
		