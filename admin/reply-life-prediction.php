<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$app_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM life_prediction WHERE life_id='$_GET[id]'"));
}
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <div class="form-body">
                                <h3 class="card-title">Response</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Response Type</label>
                                            <input type="hidden" name="life_id" required value="<?=$app_list['life_id'];?>">
                                            <select class="form-control" name="response_type" required>
                                                <option  > </option>
                                                <option value="Audio" <?php if($app_list['life_response_type']=='Audio'){ echo " selected"; }?>> Audio </option>
                                                <option Value="Email" <?php if($app_list['life_response_type']=='Email'){ echo " selected"; }?>> E-mail</option>
                                                <option Value="Call" <?php if($app_list['life_response_type']=='Call'){ echo " selected"; }?>> Call</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Response</label>
                                            <textarea class="form-control" name="response"><?=$app_list['life_response'];?></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="meeting_status">
                                                <option value="1" <?php if($app_list['life_status']=="1"){ echo " selected";}?>>Active</option>
                                                <option value="2" <?php if($app_list['life_status']=="2"){ echo " selected";}?>>Responsed</option>
                                                <option value="0" <?php if($app_list['life_status']=="0"){ echo " selected";}?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_life"> <i class="fa fa-check"></i> Save</button>
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