<?php 

			$columnCount = 1;
   			$srow = _getProjects();
			while ($sfield = $srow->fetch_assoc()) {
			 
	
echo "<div class=\"modal fade\" id=\"modal-container-".$sfield['id']."\" role=\"dialog\" aria-labelledby=\"myModalLabel-".$sfield['id']."\" aria-hidden=\"true\">
						<div class=\"modal-dialog\">
<div class=\"modal-content\">
								<div class=\"modal-header\">
									 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
									<h4 class=\"modal-title\" id=\"myModalLabel-".$sfield['id']."\">
										".$sfield['titel']."
									</h4>
								</div>
								<div class=\"modal-body\">
									<div class=\"row\">

            <div class=\"col-md-8\">
                <div id=\"carousel-example-generic-".$sfield['id']."\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">";
					if(_getNumberProImg($sfield['id']) > 1){
					for($y = 0; $y < _getNumberProImg($sfield['id']); $y++){
					echo "<li data-target=\"#carousel-example-generic-".$sfield['id']."\" data-slide-to=\"".$y."\" class=\"active\"></li>";
					}
					}
						echo "
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">";
					$row = _getProImgs($sfield['id']);
					$a = 0;
					while ($rab = $row->fetch_assoc()) {
						if($a == 0){
   						echo "<div class=\"item active\">
                            <img class=\"img-responsive\" src='".$rab['path']."' alt=\"".$sfield['titel']."\">
                        </div>";}
						else{
						echo "<div class=\"item\">
                            <img class=\"img-responsive\" src='".$rab['path']."' alt=\"".$sfield['titel']."\">
                        </div>";
						}
						$a++;
					}
					
										
						
						echo " </div>";
			if(_getNumberProImg($sfield['id']) > 1){
			echo "
                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic-".$sfield['id']."\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic-".$sfield['id']."\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </a>";
			}
					echo "
                </div>
            </div>

            <div class=\"col-md-4\">
                <h3>".$sfield['heading']."</h3>
                ".$sfield['besch']."
            </div>

        </div>
        <!-- /.row -->

       
								</div>
                                <div class=\"modal-footer\">
									
								</div>
							</div>
							
						</div> </div>";
						$columnCount++;
}
						?>