<?include('header.php');
    include('/database/connection.php');

    function redTo($value=''){
        echo "<script> window.location.replace('$value'); </script>";
    }

    //get video
    $video_id=$_GET['video_id'];
    $request_number=$_GET['request_number'];

    $q="SELECT * FROM video INNER JOIN reques WHERE video.video_id=$video_id and video.request_number=reques.request_number";

    $row=$connection->query($q)->fetch(PDO::FETCH_LAZY);
    //old video paameters
   
    $video_name=$row['video_name'];
    $video_format=$row['video_format'];
    $video_genre=$row['video_genre'];
    $video_description=$row['video_description'];
    $request_state=$row['request_state'];
    $video_id=$row['video_id'];
        
    //new video paameters
    $video_name_=$_POST['video_name'];
    $video_format_=$_POST['video_format'];
    $video_genre_=$_POST['video_genre'];
    $video_description_=$_POST['video_description'];
    $request_state_=$_POST['request_state'];

    $id_user=$_SESSION['id_user'];

    $q=" UPDATE video SET video_name='$video_name_',video_format='$video_format_',video_genre='$video_genre_',video_description='$video_description_' WHERE video_id=$video_id";

    $connection->query($q);

    if($request_number && $video_name_ && $video_format_ && $video_genre_ && $video_description_){
        $q="UPDATE `reques` SET `request_state` = '$request_state_' WHERE `reques`.`request_number` = $request_number;";
        $connection->exec($q);
        echo "Изменения сохранены";
        redTo('profile.php');
    }
?>
