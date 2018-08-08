<?php
include("connect.php");

	if(isset($_GET['id']))
{
	$idm=$_GET['id'];
	$queryd=mysql_query("delete from  catagerylayout where layout_catageryID='$idm'");
	}

	if(isset($_GET['edit']))
	{
		$idr = $_GET['edit'];
	    $sn = $_POST['name'];
		$file = 'images/'. basename($_FILES['file']['name']);
		$Move=move_uploaded_file($_FILES['file']['tmp_name'],$file);
		$sqlu=mysql_query("update catagerylayout set layout_catageryName='$sn',layout_catageryimage='$file' where layout_catageryID='$idr'");
		if($sqlu)
		{
			$status="updated";
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
                            <li><a href="#">catagery Layout</a></li>
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
                            <strong class="card-title">Catagery Layout</strong> Form
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Layout Catagery ID</th>
                                  <th scope="col">Layout Catagery Name</th>
                                  <th scope="col">Image</th>
                                  <th scope="col"colspan="2"><center style="padding-right: 50px";>Action</center></th>

                                </tr>
                              </thead>
                              <tbody>
								<?php
								
								$querys = mysql_query ("select * from catagerylayout");
								while($res=mysql_fetch_array($querys)) 
								{
									?>
                                <tr>
                                  <td><?php echo $res['layout_catageryID'];?></td>
                                  <td><?php echo $res['layout_catageryName'];?></td>
                                  <td><a href="<?php echo $res['layout_catageryimage'];?>"><img src="<?php echo $res['layout_catageryimage'];?>" height='50' width='50'/></a></td>

                                  <td><a href="catagerylayout.php?ide=<?php echo $res['layout_catageryID'];?>" class="btn btn-success btn-xs">Edit</a></td>
                                  <td><a href="viewcatagerylayout.php?id=<?php echo $res['layout_catageryID'];?>" class="btn btn-danger btn-xs">delete</a></td>

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
