<?php
if(!isset($_SESSION['username'])) 
   { 
   echo "Bitte erst <a href=\"page.php?p=Login\">einloggen</a>";
   exit; 
   } 
   
   ?>
                   			<div class="row">
          <p></p>
            <div class="col-md-3 col-sm-6">  <form action="admin.php#start" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      			
                        <h4>Startseite Bild</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                        <input type="hidden" name="change" value="1">
                        
                             <input type="text" id="index" style="width: 100%" name="index_pic" value="<?php echo _getImageURL(4); ?>">
                        <p><div id="fileTree_1" style="overflow:scroll; width: 100%; height:156px";></div></p>
                        <input class="btn btn-primary" type="submit" value="Speichern">
                    </div>
                </div></form>
            </div>
            <div class="col-md-3 col-sm-6"><form action="admin.php#start" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>Startseite Texte</h4>
                    </div>
                    <div class="panel-body" style="height:259px;text-align:left" >
                    
                        <input type="hidden" name="change" value="2">
                        <label for="index">Webseiten Titel: </label><br>
                        <input type="text" id="index" style="width: 100%" name="index_title" value="<?php echo _getTitle(3); ?>"><br><br>
                        <label for="index3">Startseite Überschrift: </label><br>
                        <input type="text" id="index3" style="width: 100%" name="index_head" value="<?php echo _getTitle(2); ?>">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        

                      <p><input class="btn btn-primary" type="submit" value="Speichern" style="position:relative;top:18px;left:82px"></p>
                        
                        
                    </div>
                </div></form>
            </div>
            
            <div class="col-md-3 col-sm-6" style="width:50%"><form action="admin.php#start" method="post">
            <input type="hidden" name="change" value="3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <h4>Startseite Text</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                        
                        <textarea name="index_text" style="width:100%;height:86%"><?php echo _getText(2); ?></textarea>
                       <p><input class="btn btn-primary" type="submit" value="Speichern"></p>
                    </div>
                </div></form>
            </div>
        </div>     