
<?php
include("connect.php");


if(isset($_GET['id']))
{
	$idm=$_GET['id'];
	$sqld=mysql_query("delete from adminlayout where admin_layoutID='$idm'");
	}


	if(isset($_GET['idh']))
	{
		$idr = $_GET['idh'];
	    $sn = $_POST['name'];
		$des = $_POST['desc'];
		$price = $_POST['price'];
		$cid = $_POST['category_id'];
		$file = 'images/'. basename($_FILES['file']['name']);
		$Move=move_uploaded_file($_FILES['file']['tmp_name'],$file);
		$sqlu=mysql_query("update adminlayout set name='$sn', description='$des', price='$price', layout_catageryID='$cid', admin_layoutimage='$file' where admin_layoutID='$idr'");
		if($sqlu)
		{
			$status="Update Successfully";
			}
		}
		
?>



<?php include_once('left_panel.php'); ?>
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include_once('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Admin Layout</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  
					<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Admin Layout</strong> Form
                        </div>
                        <div class="card-body">
                        <h3><?php echo @$status;?></h3>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Admin Layout ID.</th>
                                  <th scope="col">Catagery Name</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Layout Image</th>
                                  <th scope="col"colspan="2"><center>Action</center></th>
                               </tr>
                              </thead>
                              <tbody>
								<?php
								
								$querys = mysql_query ("select * from adminlayout left join catagerylayout on catagerylayout.layout_catageryID = adminlayout.layout_catageryID order by adminlayout.admin_layoutID DESC");
								while($res=mysql_fetch_array($querys)) 
								{
									?>
                                <tr>
                                  <td><?php echo $res['admin_layoutID'];?></td>
                                  <td><?php echo $res['layout_catageryName'];?></td>
                                  <td><?php echo $res['name'];?></td>
                                  <td><?php echo $res['description'];?></td>
                                  <td><?php echo $res['price'];?></td>
                                  <td><a href="<?php echo $res['admin_layoutimage'];?>"><img src="<?php echo $res['admin_layoutimage'];?>" width="50" height="50" /></a></td>
                                  
                                  <td><a href="admin_layout.php?ide=<?php echo $res['admin_layoutID'];?>" class="btn btn-success btn-xs">Edit</a></td>
                                  <td><a href="viewadminlayout.php?id=<?php echo $res['admin_layoutID'];?>" class="btn btn-danger btn-xs">delete</a></td>
                                  
                                </tr>
								<?php }?>

                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            	</div><!-- .animated -->
	        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
