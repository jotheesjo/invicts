<?php session_start();
include("db.php");
if(isset($_POST['update_life'])){
    
    $q=mysqli_query($conn,"UPDATE life_prediction SET life_response_type ='$_POST[response_type]',life_response='$_POST[response]',life_rsponse_date = NOW(),life_status='$_POST[meeting_status]' WHERE life_id='$_POST[life_id]'");
    if($q){
        header('Location:life-prediction-detail.php?id='.$_POST['life_id'].'&msg=Response updated successfully');
        exit();
    }else{
        header('Location:life-prediction-detail.php?id='.$_POST['life_id'].'&msg=Failed to update Response');
    }
}

?>
