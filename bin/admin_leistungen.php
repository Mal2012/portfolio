<?php
if(!isset($_SESSION['username'])) 
   { 
   echo "Bitte erst <a href=\"page.php?p=Login\">einloggen</a>";
   exit; 
   } 
   
   ?>
   
      			<div class="row">
          <p></p>
            <div class="col-md-3 col-sm-6">  <form action="admin.php#leistungen" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      			
                        <h4>Leistungen Einschalten</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                        <input type="hidden" name="change" value="13">
                        
                             <select name="einschalten" id="einschalten">
                             <option value="true" <?php if(_getTitle(16) =='true'){echo "selected";} ?>>Einschalten</option>
                             <option value="false" <?php if(_getTitle(16) =='false'){echo "selected";} ?>>Ausschalten</option>
                             </select>
                        <input class="btn btn-primary" type="submit" value="Speichern">
                    </div>
                </div></form>
            </div>
            <div class="col-md-3 col-sm-6">  <form action="admin.php#leistungen" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      			
                        <h4>Leistungen Bild</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                        <input type="hidden" name="change" value="14">
                        
                             <input type="text" id="leistungen_pic" style="width: 100%" name="leistungen_pic" value="<?php echo _getImageURL(18); ?>">
                        <p><div id="fileTree_Leistungen" style="overflow:scroll; width: 100%; height:156px";></div></p>
                        <input class="btn btn-primary" type="submit" value="Speichern">
                    </div>
                </div></form>
            </div>
           <div class="col-md-3 col-sm-6" style="width:50%"><form action="admin.php#Leistungen" method="post">
            <input type="hidden" name="change" value="15">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <h4>Leistungen Text</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                        
                        <textarea name="leistungen_text" style="width:100%;height:86%"><?php echo _getText(16); ?></textarea>
                       <p><input class="btn btn-primary" type="submit" value="Speichern"></p>
                    </div>
                </div></form>
            </div>
        </div>     