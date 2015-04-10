<?php include("header.php"); ?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        
        <?php 
			echo "<ol class=\"carousel-indicators\" style=\"text-align:left\">";
			 for($x = 0; $x < _getNumberSlides(); $x++){
				 if($x == 0){
           echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$x."\" class=\"active\"></li>";
				 }else{
		   echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$x."\"></li>";
		   }
           
		}
        echo "</ol>";
		echo "<div class=\"carousel-inner\">";
		$columnCount = 0;
   		$row = _getSlides();
		while ($field = $row->fetch_assoc()) {
				 if($columnCount == 0){
				echo "<div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url('".$field['path']."');\"></div>
               		 <div class=\"carousel-caption\">
                   		 <h2 style=\"
    font-family: 'Open Sans Condensed', sans-serif; text-align:right;
\">".$field['title']."</h2>
              	  	 </div>
            	</div>";
				 }else{
				echo "<div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('".$field['path']."');\"></div>
                	<div class=\"carousel-caption\">
                   		 <h2 style=\"
    font-family: 'Open Sans Condensed', sans-serif; text-align:right;
\">".$field['title']."</h2>
                	</div>
            	</div>"; 
				 }
				 $columnCount++;
		}
		echo "</div>";
		
?>


        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><?php echo _getTitle(2); ?></h2>
            </div>
            <div class="col-md-6">
                <?php 
				echo _getText(2); 
				?> 
                
                </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo _getImageURL(4); ?>" alt="Innenarchitektur Jennifer Bühling" title="Jennifer Bühling" style="
    margin-right: 0px;
    margin-left: 27px;
">
            </div>
        </div>
        <!-- /.row -->

      <?php include("footer.php");?>

