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
                      			
                        <h4> <a data-toggle="collapse" data-target="#collapseItems" 
           href="#collapseItems" class="collapsed">Portfolio Items</a></h4>
                    </div>
                    <div id="collapseItems" class="panel-collapse collapse">
                    <div class="panel-body">

                        <?php 
						$columnCount = 0;
   						$row = _getProjects();
  					   /* fetch associative array */
					   
   					 while ($field = $row->fetch_assoc()) {
          						  
					echo "<figure class=\"work-item branding\" style=\"
    width: 300px;
    height: 200px;
\">
					<img src=\"".$field['path']."\" alt=\"\">
					<figcaption class=\"overlay\">
					
						<h4>".$field['shead']." Bearbeiten?</h4>
						<form action=\"admin.php?p=edit\" method=\"post\">
						<input type=\"hidden\" name=\"id\" value=\"".$field['id']."\">
						<input class=\"btn btn-primary\" type=\"submit\" value=\"Bearbeiten\">
						</form>
						<h4>".$field['shead']." Löschen?</h4>
						<form action=\"admin.php#portfolio\" method=\"post\">
						<input type=\"hidden\" name=\"id\" value=\"".$field['id']."\">
                  		  <input type=\"hidden\" name=\"change\" value=\"8\">
						<input class=\"btn btn-primary\" type=\"submit\" value=\"Löschen\">
						</form>
					</figcaption>
				</figure>";
           					 $columnCount++;
       								 
   									 }

   						
						?>
                        
                        
                    </div></div>
                </div>
            </div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                 <div class="panel-heading">
                      			
                        <h4><a data-toggle="collapse" data-target="#collapseAdd" 
           href="#collapseAdd" class="collapsed">Neues Portfolio Element Hinzufügen</a></h4>
                    </div>
                    <div id="collapseAdd" class="panel-collapse collapse">
                    <div class="panel-body" style="text-align:left">
                    
                    <form action="admin.php#portfolio" method="post">
                    <input type="hidden" name="change" value="9">
                    	<div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    	  <p><label for="short">Kurzüberschrift: </label><br>
                  		  <input type="text" id="short"  name="short" value="Kurzüberschrift"></p>
                          
                          <p><label for="head">Überschrift: </label><br>
                  		  <input type="text" id="head"  name="head" value="Überschrift"></p>
                          <p><label for="deschead">Beschreibung Überschrift: </label><br>
                  		  <input type="text" id="deschead"  name="deschead" value="Details"></p>
                          <p><label for="button">Button: </label><br>
                  		  <input type="text" id="button"  name="button" value="Weiter..."></p>
                         
                         </div></div></div>
                         <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                  
                    		<label for="shortdesc"> Kurzbeschreibung: </label><br>
                  		  <textarea name="shortdesc" id="shortdesc" style="width:100%;height:214px" maxlength="90">90 Zeichen Maximum</textarea>
                       
                        
                        
                        </div></div></div>
                        
                        
                        <div class="col-md-3 col-sm-6" style="width:50%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    <label for="desc"> Beschreibung: </label><br>
                  		  <textarea name="desc" id="desc" style="width:100%;height:214px">Kein Maximum</textarea>
                      
                    </div></div></div>
                    <div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                    <div class="panel-body" style="text-align:left">
                    	<label for="path"> Bildpfad: </label>
                         <input type="text" id="path" style="width: 25%" name="path" value="Pfad">
                        <p><div id="fileTree_3" style="overflow:scroll; width: 100%; height:156px";></div></p>
                        </div>
                </div>
            </div>
                    <input class="btn btn-primary" type="submit" style="margin:5px" value="Speichern"></form>
                    </div>
                </div>
            </div>
            </div>
</div>
<?php include("bin/admin_portfolio_image.php"); ?>