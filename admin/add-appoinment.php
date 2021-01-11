<?php include("header.php");
include("aside.php");
$meeting_with=mysqli_query($conn,"SELECT * FROM employees WHERE emp_status='1'");
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
                <h4 class="text-themecolor">ADD APPOINMENT</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <div class="form-body">
                                <h3 class="card-title">Person Info</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" id="mobile" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Mobile</label>
                                            <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meeting on</label>
                                            <input type="text" id="appdate" class="form-control date-format" placeholder="Date" name="appdate" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meeting With</label>
                                            <select class="form-control" name="meeting_with" id="meetingwith">
                                                <option disabled selected value>Meeting With</option>
                                                <option value="corporate">Corporate Team</option>
                                                <option value="admin">Admin</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meeting Person</label>
                                            <select class="form-control" name="meeting_person" required id="meperson">
                                                <option disabled selected value>Meeting Person</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meeting Status</label>
                                            <select class="form-control" name="meeting_status">
                                                <option value="1">Assign</option>
                                                <option value="2">Hold</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Regarding</label>
                                            <textarea class="form-control" name="regarding"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <!--/row-->
                                <div class="row">

                                    <!--/span-->

                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_appoinment"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>
<script>
    $(document).ready(function() {
        $("#meetingwith").change(function() {
            var meeting_with = $(this).val();
            $.ajax({
                type: 'POST',
                data: {
                    meeting_with: meeting_with
                },
                url: 'ajax.php',
                success: function(data) {
                    $("#meperson").html(data);
                }
            });
        });
    });

</script>
