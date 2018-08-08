<?php
include("connect.php");

	if(isset($_GET['insert']))
	{
		$sn = $_POST['name'];
		$des = $_POST['desc'];
		$price = $_POST['price'];
		$cid = $_POST['category_id'];
		$file = 'images/'. basename($_FILES['file']['name']);
		$Move=move_uploaded_file($_FILES['file']['tmp_name'],$file);

		$qinsert=mysql_query("insert into adminlayout(name,description,price,layout_catageryID,admin_layoutimage) values ('$sn','$des','$price','$cid','$file')");
		
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
                        <strong>Admin Layout</strong> Form
                      </div>
                      <div class="card-body card-block">
                      
                      <?php 
					  
					  if(isset($_GET['ide']))
					  {
						$idm = $_GET['ide'];
						$querye = mysql_query("select * from adminlayout where admin_layoutID='$idm'");
						$res=mysql_fetch_array($querye);
					  
					  ?>
                        
                       <form action="viewadminlayout.php?idh=<?php echo $res["admin_layoutID"]?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            
                            <div class="col col-md-3"><label for="category_id" class=" form-control-label">Layout Catagery ID</label></div>
                            <div class="col-12 col-md-9">
                              <select name="category_id" id="category_id" class="form-control">
                                <option value="">---Select Layout Catagery ID---</option>
								<?php 
                                $sqls=mysql_query("select * from catagerylayout");
                                while($ress=mysql_fetch_array($sqls))
                                {
                                ?>
                                
                                <option value="<?php echo $ress['layout_catageryID'];?>" <?php if($res['layout_catageryID']==$ress['layout_catageryID']){echo "selected";}?>><?php echo $ress['layout_catageryName'];?> </option>

                                <?php }?>

                              </select>
                            </div>
                          </div>
                     	 
                         
                          <div class="row form-group">
                    		<div class="col col-md-3"><label for="text-input" class=" form-control-label">Layout Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Please Enter Layout Name " class="form-control" value="<?php echo $res['name'];?>"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descriptions</label></div>
                            <div class="col-12 col-md-9"><textarea name="desc" val id="descriptions" rows="5" placeholder="Descriptions..." 
                            class="form-control"><?php echo $res['description'];?></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="" class=" form-control-label">Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="" name="price" placeholder="Please Enter Price " class="form-control" 
                            value="<?php echo $res['price'];?>"></div>
                          </div>
                          	
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="" class=" form-control-label">Upload Layout Image</label></div>
                            <div class="col-md-3"><input type="file" id="" name="file" class="form-control-file" /></div>
                            <div class="col-md-3"><img src="<?php echo $res['admin_layoutimage'];?>" height="30" width="30" /></div>

                            </div>
                          
                          
                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Update
                        </button>
	                      </div>
                        </form>
                        <?php } else { ?>

                        <form action="admin_layout.php?insert=0" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            
                            <div class="col col-md-3"><label for="category_id" class=" form-control-label">Layout Catagery ID</label></div>
                            <div class="col-12 col-md-9">
                              <select name="category_id" id="category_id" class="form-control">
                                <option value="">---Select Layout Catagery ID---</option>
								<?php 
                                $sqls=mysql_query("select * from catagerylayout");
                                while($ress=mysql_fetch_array($sqls))
                                {
                                ?>
                                
                                <option value="<?php echo $ress['layout_catageryID'];?>"><?php echo $ress['layout_catageryName'];?> </option>

                                <?php } ?>

                              </select>
                            </div>
                          </div>
                     	 
                         
                          <div class="row form-group">
                    		<div class="col col-md-3"><label for="text-input" class=" form-control-label">Layout Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Please Enter Layout Name " class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descriptions</label></div>
                            <div class="col-12 col-md-9"><input type = "textarea" name="desc" id="descriptions" rows="5" placeholder="Descriptions..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="" class=" form-control-label">Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="" name="price" placeholder="Please Enter Price " class="form-control"></div>
                          </div>
                          	
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="" class=" form-control-label">Upload Layout Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="" name="file" class="form-control-file"></div>
                                                   
                          </div>
                          
                          
                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
	                      </div>
                        </form>
                        
                        <?php } ?>
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
