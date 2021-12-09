<?php 

    $active='Shop';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       helps & Questions
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
            <div class="col-md-3"><!-- col-md-3 Begin -->
            
                <div class="box"><!-- box Begin -->
                    <ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Begin -->
                    
                        <?php 
                        
                        $get_helps = "select * from helps LIMIT 0,1";
                        $run_helps = mysqli_query($con,$get_helps);

                        while($row_helps=mysqli_fetch_array($run_helps)){

                            $help_title = $row_helps['help_title'];
                            $help_link = $row_helps['help_link'];
                        
                        ?>

                        <li class="active"><!-- li.active Begin -->

                            <a data-toggle="pill" href="#<?php echo $help_link; ?>">
                            
                                <?php echo $help_title; ?>
                            
                            </a>

                        </li><!-- /li.active Begin -->

                        <?php } ?>

                        <?php 
                        
                            $count_helps = "select * from helps";
                            $run_count_helps = mysqli_query($con,$count_helps);
                            $count = mysqli_num_rows($run_count_helps);
                            $get_helps = "select * from helps LIMIT 1,$count";
                            $run_helps = mysqli_query($con,$get_helps);

                            while($row_helps=mysqli_fetch_array($run_helps)){

                                $help_title = $row_helps['help_title'];
                                $help_link = $row_helps['help_link'];
                        
                        ?>

                        <li><!-- li Begin -->

                            <a data-toggle="pill" href="#<?php echo $help_link; ?>">
                            
                                <?php echo $help_title; ?>
                            
                            </a>

                        </li><!-- /li Begin -->

                        <?php } ?>
                    
                    </ul><!-- /nav nav-pills nav-stacked Begin -->
                </div><!-- /box Begin -->
            
            </div><!-- /col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->
                <div class="box"><!-- box Begin -->
                    <div class="tab-content"><!-- tab-content Begin -->
                    
                    <?php 
                    
                        $get_helps = "select * from helps LIMIT 0,1";
                        $run_helps = mysqli_query($con,$get_helps);

                        while($row_helps=mysqli_fetch_array($run_helps)){

                            $help_title = $row_helps['help_title'];
                            $help_desc = $row_helps['help_desc'];
                            $help_link = $row_helps['help_link'];
                    
                    ?> 

                        <div id="<?php echo $help_link; ?>" class="tab-pane fade in active"><!-- tab-pane fade in active Begin -->
                        
                        <h1 class="tabTitle"><?php echo $help_title; ?></h1>
                        <p class="tabDesc"><?php echo $help_desc; ?></p>
                        
                        </div><!-- tab-pane fade in active Finish -->

                    <?php } ?>

                    <?php 

                        $count_helps = "select * from helps";
                        $run_count_helps = mysqli_query($con,$count_helps);
                        $count = mysqli_num_rows($run_count_helps);
                        $get_helps = "select * from helps LIMIT 1,$count";
                        $run_helps = mysqli_query($con,$get_helps);

                        while($row_helps=mysqli_fetch_array($run_helps)){

                            $help_title = $row_helps['help_title'];
                            $help_desc = $row_helps['help_desc'];
                            $help_link = $row_helps['help_link'];

                    ?>

                        <div id="<?php echo $help_link; ?>" class="tab-pane fade in"><!-- tab-pane fade in active Begin -->
                        
                        <h1 class="tabTitle"><?php echo $help_title; ?></h1>
                        <p class="tabDesc"><?php echo $help_desc; ?></p>
                        
                        </div><!-- tab-pane fade in active Finish -->

                    <?php } ?>
                    
                    </div><!-- tab-content Finish -->
                </div><!-- /box Finish -->
            </div><!-- /col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>