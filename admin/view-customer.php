<?php include("header.php");
include("aside.php");?>
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
                        <h4 class="text-themecolor">CUSTOMER</h4>
                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Pincode</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $customer_list=mysqli_query($conn,"SELECT a.*,b.name as city,c.name as state,d.name as country FROM customers a,countries_cities b,countries_states c,countries d WHERE a.customer_city=b.id AND a.customer_state=c.id AND a.customer_country=d.id");
                                                while($row=mysqli_fetch_array($customer_list)){ ?>
                                                  <tr>
                                                <td><?=$row['customer_name'];?></td>
                                                <td><?=$row['customer_email'];?></td>
                                                <td><?=$row['customer_mobile'];?></td>
                                                <td><?=$row['customer_address'];?></td>
                                                <td><?=$row['city'];?></td>
                                                <td><?=$row['state'];?></td>
                                                <td><?=$row['customer_pincode'];?></td>
                                                <td><?=$row['country'];?></td>
                                                <td><?php if($row['customer_status']==1){
                                                    echo "Active";
                                                }else{
                                                    echo "Inactive";
                                                }?></td>
                                                <td><a href="customer-detail.php?id=<?=$row['customer_id'];?>" class="btn waves-effect waves-light btn-warning">View</a>
<a href="edit-customer.php?id=<?=$row['customer_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a></td>
                                            </tr>  
                                                <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                 </div>
                        </div>
                        
  <?php include("footer.php");?>
<script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

            $('#config-table').DataTable({
                responsive: true
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>