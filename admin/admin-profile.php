<?php include("header.php");?>
<?php include("aside.php");
$info=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM admin_profile WHERE admin_username=".$_SESSION[ADMINSESSION.'user']));

?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Admin Profile</h4>
                    </div>
                </div>
    
               
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="update.php">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_username" placeholder="Enter Username" required value="<?=$info['admin_username'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_name" placeholder="Enter name" required value="<?=$info['admin_name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Mobile</label>
                                            <input type="text" class="form-control" id="exampleInputmobile" name="admin_mobile" placeholder="Enter Mobile" required value="<?=$info['admin_mobile'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="admin_email" placeholder="Enter email" required value="<?=$info['admin_email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Change Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="admin_profile_update">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include("footer.php");?>