<?php
include("connect.php");

	if(isset($_GET['insert']))
	{
		$sn= $_POST['name'];
		$file = 'images/'. basename($_FILES['file']['name']);
		$Move=move_uploaded_file($_FILES['file']['tmp_name'],$file);
		$qinsert=mysql_query("insert into catagerylayout (layout_catageryName,layout_catageryimage) values ('$sn','$file')");
		
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
                            <li><a href="#">Catagery Layout</a></li>
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
                        <strong>Catagery Layout</strong> Form 
                      </div>
                      <?php 
					  if (isset($_GET['ide']))
					 {
						 $idm = $_GET['ide'];
						  $querys = mysql_query("select * from catagerylayout where layout_catageryID='$idm'");
						  $res = mysql_fetch_array($querys);
					  ?>
                      <form action="viewcatagerylayout.php?edit=<?php echo $res['layout_catageryID'];?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Catagery Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Please enter Catagery Name " class="form-control" value="<?php echo $res['layout_catageryName'];?>"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload Layout Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file" class="form-control-file"></div>
                                                   
                          </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                          </div>
                        </form>
                     <?php } else { ?>
                      <div class="card-body card-block">
                      
                        <form action="catagerylayout.php?insert=0" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Catagery Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Please enter Catagery Name " class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload Layout Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file" class="form-control-file"></div>
                                                   
                          </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                          </div>
                        </form>
                      </div>
                      
                     <?php } ?> 
                    
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
