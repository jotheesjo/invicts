
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
           header("Location:services?msg=File type not support");
          exit();
        }elseif($file_size > 2097152){
          header("Location:services.php?msg=File size should be lessthan 2MB");
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
// update process
if(isset($_POST['update_process'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:process.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:process.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="vendor-".$rand.'-'.$file_name;
        $filepath="../images/process/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    
    $q=mysqli_query($conn,"UPDATE process SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename' WHERE process_id='$_POST[process_id]'");
    if($q){

        header('Location:process.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:process.php?msg=Failed to update detail');
    }
}
// update portfolio
if(isset($_POST['update_portfolio'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:portfolio.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:portfolio.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="vendor-".$rand.'-'.$file_name;
        $filepath="../images/portfolio/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    $q=mysqli_query($conn,"UPDATE portfolio SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename',link ='$_POST[link]' WHERE portfolio_id='$_POST[portfolio_id]'");
    if($q){

        header('Location:portfolio.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:portfolio.php?msg=Failed to update detail');
    }
}

// update about
if(isset($_POST['update_about'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:about.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:about.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="vendor-".$rand.'-'.$file_name;
        $filepath="../images/about/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    $description=mysqli_real_escape_string($conn,$_POST['paragraph']);
    $q=mysqli_query($conn,"UPDATE about SET title1 ='$_POST[title1]',subtitle1='$_POST[subtitle1]',paragraph ='$description',image='$filename',title2 ='$_POST[title2]',subtitle2 ='$_POST[subtitle2]',sec1 ='$_POST[sec1]',sec2 ='$_POST[sec2]',sec3 ='$_POST[sec3]',sec4 ='$_POST[sec4]' WHERE about_id='1'");
    if($q){

        header('Location:about.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:about.php?msg=Failed to update detail');
    }
}

// packages
if(isset($_POST['update_packages'])){
  $features=array_combine($_POST['fea_name'], $_POST['featuresstatus']);
  $feature=json_encode($features);
  $q=mysqli_query($conn,"UPDATE packages SET title ='$_POST[title]',subtitle='$_POST[subtitle]',status ='$_POST[status]',package_info='$feature' WHERE packages_id='$_POST[packages_id]'");
  if($q){

      header('Location:packages.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:packages.php?msg=Failed to update detail');
  }
}
// update_homesec1
if(isset($_POST['update_homesec1'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:home-section1.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:home-section1.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../images/home/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    $q=mysqli_query($conn,"UPDATE home_section1 SET title ='$_POST[title]',link='$_POST[link]',image ='$description',image='$filename',status ='$_POST[status]' WHERE home_id='$_POST[home_id]'");
    if($q){

        header('Location:home-section1.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:home-section1.php?msg=Failed to update detail');
    }
}
?>