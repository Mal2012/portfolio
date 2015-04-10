<?php
if(!isset($_SESSION['username'])) 
   { 
   echo "Bitte erst <a href=\"page.php?p=Login\">einloggen</a>";
   exit; 
   } 
   
   ?>
<div class="row">
		<div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                 	<div class="panel-heading">		
                        <h4><a data-toggle="collapse" data-target="#collapseAddImg" 
           href="#collapseAddImg" class="collapsed">Bilder Portfolio Element Hinzufügen</a></h4>
                    </div>
                    <div id="collapseAddImg" class="panel-collapse collapse">
                    <div class="panel-body" style="text-align:left"> 
                    <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    <form action="admin.php#portfolio" method="post">
                    <input type="hidden" name="change" value="10">
                    <label for="selecteditem">Ausgewähltes Portfolio Element:</label><br>
                    <select name="item" id="selecteditem" size="10" style="width:100%"> 
 						<?php 
						$columnCount = 0;
   						$row = _getProjects();
  					   /* fetch associative array */
					   
   					 while ($field = $row->fetch_assoc()) {
						 echo "<option value=\"".$field['id']."\">".$field['shead']."</option>";
					 }
					 ?>
					</select> 
                    </div></div></div> 
                    
                    <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    <label for="multipleselect">Ausgewählte Bilder:</label><br>
                    <select name="images[]" id="multipleselect" size="10" style="width:100%" multiple> 

					</select> 
                    </div></div></div>   
                    
                                         
                    <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    <label for="fileTree_4">Verfügbare Bilder:</label><br>
                    <div id="fileTree_4" style="overflow:scroll; width: 100%; height:174px";>
                    </div></div></div></div>
                    <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body">
                    
                    <input class="btn btn-primary" type="submit" style="margin:5px" value="Speichern">
                    </div></div></div>
                    
                    </form>
                    </div>
                </div>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                 	<div class="panel-heading">		
                        <h4><a data-toggle="collapse" data-target="#collapseDelImg" 
           href="#collapseDelImg" class="collapsed">Bilder aus Portfolio Element Enfernen</a></h4>
                    </div>
                    <div id="collapseDelImg" class="panel-collapse collapse">
                    <div class="panel-body" style="text-align:left"> 
                   <?php
				   		$columnCount = 0;
   						$row = _getProjects();
  					   /* fetch associative array */
					   
   					 while ($field = $row->fetch_assoc()) {
          		echo "<div class=\"col-md-3 col-sm-6\" style=\"width:100%\"> 
                <div class=\"panel panel-default text-center\">
                 	<div class=\"panel-heading\">		
                        <h4>".$field['shead']."</h4>
                    </div>
                    <div class=\"panel-body\" style=\"text-align:left\">
					";
					$scolumnCount = 0;
   						$srow = _getProImgs($field['id']);
  					   /* fetch associative array */
					   
   					 while ($sfield = $srow->fetch_assoc()) {
          						  
					echo "<figure class=\"work-item branding\">
					<img src=\"".$sfield['path']."\" alt=\"\">
					<figcaption class=\"overlay\">
					
						<h4>Löschen?</h4>
						<form action=\"admin.php#portfolio\" method=\"post\">
						<input type=\"hidden\" name=\"id\" value=\"".$sfield['id']."\">
                  		  <input type=\"hidden\" name=\"change\" value=\"11\">
						<input class=\"btn btn-primary\" type=\"submit\" value=\"Löschen\">
						</form>
					</figcaption>
				</figure>";
           					 $scolumnCount++;
       								 
   									 }
					
					
					  echo "  </div>
           		     </div>
				</div>
					"; 
								  
           					 $columnCount++;
       								 
   									 }

   						
						?>
				   	</div>
				   
                    </div>
                </div>
		</div>

</div>