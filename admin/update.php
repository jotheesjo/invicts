
<?php session_start();
include("db.php");
//admin Profile
if(isset($_POST['admin_profile_update'])){
    if($_POST['password']!=''){
        $password=md5($_POST['password']);
        $pwd=",admin_password='" .$password."' ";
    }else{
        $pwd='';
    }
    // echo "UPDATE admin_profile SET admin_name ='$_POST[admin_name]',admin_email='$_POST[admin_email]',admin_mobile ='$_POST[admin_mobile]',admin_username='$_POST[admin_username]'".$pwd."WHERE admin_id='5'";
    $q=mysqli_query($conn,"UPDATE admin_profile SET admin_name ='$_POST[admin_name]',admin_email='$_POST[admin_email]',admin_mobile ='$_POST[admin_mobile]',admin_addr1='$_POST[admin_addr1]',admin_addr2='$_POST[admin_addr2]',get_in_touch='$_POST[get_in_touch]',admin_username='$_POST[admin_username]'".$pwd."WHERE admin_id='5'");
    if($q){	
        header('Location:admin-profile.php?msg=Profile updated login again');
        exit();
    }else{
        header('Location:admin-profile.php?msg=Failed to update profile');
    }
}
// update services
if(isset($_POST['update_service'])){
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
        $file_name = $_FILES['photo']['name'];
        $file_size =$_FILES['photo']['size'];
        $file_tmp =$_FILES['photo']['tmp_name'];
        $file_type=$_FILES['photo']['type'];
          $tmp_explode=explode('.',$file_name);
        $file_ext=strtolower(end($tmp_explode));
        $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
           header("Location:add-vendor.php?msg=File type not support");
          exit();
        }elseif($file_size > 2097152){
          header("Location:add-vendor.php?msg=File size should be lessthan 2MB");
          exit();
        }else{
          $rand=rand(0,1000);
          $filename="vendor-".$rand.'-'.$file_name;
          $filepath="../images/service/".$filename;
           move_uploaded_file($file_tmp,$filepath);
      }
      }else{
          $filename=$_POST['img'];
      }
      
      $q=mysqli_query($conn,"UPDATE services SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename' WHERE service_id='$_POST[service_id]'");
      if($q){
  
          header('Location:services.php?msg=detail updated successfully');
          exit();
      }else{
          header('Location:services.php?msg=Failed to update detail');
      }
}
?>