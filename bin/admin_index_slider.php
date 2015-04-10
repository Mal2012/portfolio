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
                      			
                        <h4>Startseite Slider</h4>
                    </div>
                    <div class="panel-body">

                        <?php 
						$columnCount = 0;
   						$row = _getSlides();
  					   /* fetch associative array */
					   
   					 while ($field = $row->fetch_assoc()) {
          						  
					echo "<figure class=\"work-item branding\">
					<img src=\"".$field['path']."\" alt=\"\">
					<figcaption class=\"overlay\">
					
						<h4>Slide Löschen?</h4>
						<form action=\"admin.php#start\" method=\"post\">
						<input type=\"hidden\" name=\"id\" value=\"".$field['id']."\">
                  		  <input type=\"hidden\" name=\"change\" value=\"4\">
						<input class=\"btn btn-primary\" type=\"submit\" value=\"Löschen\">
						</form>
					</figcaption>
				</figure>";
           					 $columnCount++;
       								 
   									 }

   						
						?>
                        
                        
                    </div>
                </div>
            </div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                 <div class="panel-heading">
                      			
                        <h4>Neue Slide Hinzufügen</h4>
                    </div>
                    <div class="panel-body" style="text-align:left">
                    <form action="admin.php#start" method="post">
                    <input type="hidden" name="change" value="5">
                    		<label for="caption">Untertitel: </label>
                  		  <input type="text" id="caption" style="width: 25%" name="index_cap" value="Untertitel">
                         <label for="index2">Pfad: </label>
                         <input type="text" id="index2" style="width: 25%" name="index2_pic" value="Pfad"><input class="btn btn-primary" type="submit" style="margin:5px" value="Speichern">
                        <p><div id="fileTree_2" style="overflow:scroll; width: 100%; height:156px";></div></p>
                        
                        </form>
                        </div>
                </div>
            </div>
</div>
