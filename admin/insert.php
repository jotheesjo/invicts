<?php session_start();
include("db.php");
if(isset($_POST['insert_franchise'])){
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-franchise.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-franchise.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="franchise-".$rand.'-'.$file_name;
        $filepath=IMGPATH.$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    $ins=mysqli_query($conn,"INSERT INTO franchise (franchise_name,franchise_email,franchise_mobile,franchise_altr_mobile,franchise_image,franchise_location,franchise_address,franchise_city,franchise_state,franchise_pincode,franchise_country) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[altr_mobile]','$filename','$_POST[area]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]')");
    if($ins){
        header("Location:add-franchise.php?msg=branch created successfully");
        exit();
    }else{
        header("Location:add-franchise.php?msg=Failed to create branch");
        exit();
    }
}elseif(isset($_POST['insert_customer'])){
    $ins=mysqli_query($conn,"INSERT INTO customers (customer_name ,customer_email ,customer_mobile,customer_altr_mobile,customer_address,customer_city,customer_state,customer_country,customer_pincode) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[altr_mobile]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[postcode]')");
    if($ins){
        header("Location:add-customer.php?msg=customer created successfully");
        exit();
    }else{
        header("Location:add-customer.php?msg=Failed to create customer");
        exit();
    }
}elseif(isset($_POST['insert_corporate'])){
if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-corporate-information.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-corporate-information.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="employee-".$rand.'-'.$file_name;
        $filepath=IMGPATH.$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    $pwd=base64_encode($_POST['password']);
    $ins=mysqli_query($conn,"INSERT INTO employees (emp_name,emp_email,emp_mobile,emp_altr_mobile,emp_image,emp_department,emp_address,emp_city,emp_state,emp_pincode,emp_country,emp_role,emp_password) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[altr_mobile]','$filename','$_POST[department]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]','$_POST[emp_role]','$pwd')");
    if($ins){
        header("Location:add-corporate-information.php?msg=employee created successfully");
        exit();
    }else{
        header("Location:add-corporate-information.php?msg=Failed to create employee");
        exit();
    }
}elseif(isset($_POST['insert_task'])){
//    print_r($_POST);
    $req_service= implode(',',$_POST['req_service']);
    $task_handler= implode(',',$_POST['task_handler']);
    
    $ins=mysqli_query($conn,"INSERT INTO projects (proj_name,client_name,client_email,client_mobile,client_altr_mobile,req_service,proj_handler,proj_open_date) VALUES('$_POST[proj_name]','$_POST[client_name]','$_POST[email]','$_POST[mobile]','$_POST[altr_mobile]','$req_service','$task_handler','$_POST[open_date]')");    
    
    if($ins){
        header("Location:add-task.php?msg=Project created successfully");
        exit();
    }else{
        header("Location:add-task.php?msg=Project to create task");
        exit();
    }
    
}elseif(isset($_POST['insert_proj_task'])){
    $ins=mysqli_query($conn,"INSERT INTO project_task (proj_project_id,proj_assign_to,proj_comments,proj_task_create_by,proj_task_create_date,proj_task_status) VALUES('$_POST[project]','$_POST[assign_to]','$_POST[proj_comments]','$_SESSION[admin_session_id]',NOW(),'$_POST[task_status]')");
                      if($ins){
        header("Location:add-project-task.php?msg=Task created successfully");
        exit();
    }else{
        header("Location:add-project-task.php?msg=Failed to create Task");
        exit();
    }
}
elseif(isset($_POST['insert_admin'])){
    
   $pwd=md5($_POST['mobile']);
    $ins=mysqli_query($conn,"INSERT INTO admin_profile (admin_name,admin_email,admin_mobile,admin_username,admin_password,admin_role,admin_status) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[username]','$pwd','admin','1')");    
//echo "INSERT INTO admin_profile (admin_name,admin_email,admin_mobile,admin_username,admin_password,admin_role,admin_status) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[username]','$pwd','admin','1')";
    if($ins){
        header("Location:add-admin.php?msg=admin created successfully");
        exit();
    }else{
        header("Location:add-admin.php?msg=Failed to create admin");
        exit();
    }
    
}elseif(isset($_POST['insert_vendor'])){

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
        $filepath=IMGPATH.$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
//    echo $filename;
    $ins=mysqli_query($conn,"INSERT INTO vendors (vendor_name,vendor_email,vendor_mobile,vendor_gst,vendor_image,vendor_address,vendor_city,vendor_state,vendor_pincode,vendor_country) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[gst]','$filename','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]')");
    if($ins){
        header("Location:add-vendor.php?msg=vendor created successfully");
        exit();
    }else{
        header("Location:add-vendor.php?msg=Failed to create vendor");
        exit();
    }
}elseif(isset($_POST['insert_appoinment'])){
    //print_r($_POST);
    //echo "INSERT INTO appoinment (app_name,app_email,app_mobile,meeting_with,meeting_person,app_regarding,app_date,app_create_date,app_status) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[meeting_with]','$_POST[meeting_person]','$_POST[regarding]','$_POST[appdate]',NOW(),'$_POST[meeting_status]')";
    $ins=mysqli_query($conn,"INSERT INTO appoinment (app_name,app_email,app_mobile,meeting_with,meeting_person,app_regarding,app_date,app_create_date,app_status) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[meeting_with]','$_POST[meeting_person]','$_POST[regarding]','$_POST[appdate]',NOW(),'$_POST[meeting_status]')");
    if($ins){
        header("Location:add-appoinment.php?msg=Appoinment created successfully");
        exit();
    }else{
        header("Location:add-appoinment.php?msg=Failed to create appoinment");
        exit();
    }
}elseif(isset($_POST['insert_department'])){
    $ins=mysqli_query($conn,"INSERT INTO corporate_department (department_name,department_status,department_create_date) VALUES('$_POST[department_name]','$_POST[status]',NOW())");
    if($ins){
        header("Location:department.php?msg=Department created successfully");
        exit();
    }else{
        header("Location:department.php?msg=Failed to create department");
        exit();
    }
}elseif(isset($_POST['insert_employees'])){
    print_r($_POST);

    
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-employee-information.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-employee-information.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="employee-".$rand.'-'.$file_name;
        $filepath=IMGPATH.$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    
    $ins=mysqli_query($conn,"INSERT INTO employee_list (em_code,em_name,em_email,em_mobile,em_emergency_mobile,em_image,em_dob,em_doj,em_address,em_city,em_state,em_postcode,em_country) VALUES('$_POST[employee_code]','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[emergency_mobile]','$filename','$_POST[dob]','$_POST[doj]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]')");
    if($ins){
        header("Location:add-employee-information.php?msg=Employee created successfully");
        exit();
    }else{
        header("Location:add-employee-information.php?msg=Failed to create Employee");
        exit();
    }
    
}elseif(isset($_POST['task_rep'])){
//    print_r($_POST);
    $inn=mysqli_fetch_array(mysqli_query($conn,"SELECT proj_comment_reply FROM project_task WHERE project_task_id='$_POST[task_id]'"));
    if($inn['proj_comment_reply']!=''){
        $mm=array("reply" => $_POST['task_reply'], "replytime" => date('Y-m-d H:i:s'),"reply_from" =>$_SESSION['admin_session_id']);
//        print_r($mm);
        $exist=json_decode($inn['proj_comment_reply'],true);
        
        $exist[]=$mm;
//        print_r($exist);
        $rply=json_encode($exist);
         $ins=mysqli_query($conn,"UPDATE project_task SET proj_task_status='$_POST[task_status]',proj_comment_reply='$rply' WHERE project_task_id='$_POST[task_id]'");
    }else{
        $myArray = array();
        $myArray[] = array("reply" => $_POST['task_reply'], "replytime" => date('Y-m-d H:i:s'),"reply_from" =>$_SESSION['admin_session_id'] );
        $rply=json_encode($myArray);
        $ins=mysqli_query($conn,"UPDATE project_task SET proj_task_status='$_POST[task_status]',proj_comment_reply='$rply' WHERE project_task_id='$_POST[task_id]'");
    }
     if($ins){
        header("Location:view-task-list.php?id=13&msg=Employee created successfully");
        exit();
    }else{
        header("Location:view-task-list.php?id=13&msg=Failed to create Employee");
        exit();
    }
    
}

?>


