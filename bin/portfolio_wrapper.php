 <div class="row">
 <div class="project-wrapper">
			
            
            <?php 
			$columnCount = 1;
   			$row = _getProjects();
			while ($field = $row->fetch_assoc()) {
			 
			 echo "<figure class=\"work-item branding\">
					<img src=\"".$field['path']."\" alt=\"".$field['shead']."\">
					<figcaption class=\"overlay\">
						<h4>".$field['shead']."</h4>
						<p>".$field['short']."</p><a id=\"modal-".$field['id']."\" href=\"#modal-container-".$field['id']."\" role=\"button\" class=\"btn\" data-toggle=\"modal\">".$field['button']."</a>
					</figcaption>
				</figure>";
			$columnCount++;
			 }
			 
			?>
            
            
				
				
			</div>
          
        </div>
        <!-- /.row -->



							<?php include("bin/modal_wrapper.php"); ?>
						