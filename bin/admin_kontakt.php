<?php
if(!isset($_SESSION['username'])) 
   { 
   echo "Bitte erst <a href=\"page.php?p=Login\">einloggen</a>";
   exit; 
   } 
   
   ?>
                   			<div class="row">
          <p></p>
            
            <div class="col-md-3 col-sm-6" style="width:50%"><form action="admin.php#kontakt" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>Kontaktinformationen</h4>
                    </div>
                    <div class="panel-body" style="text-align:left">
                    
                        <input type="hidden" name="change" value="6">
                        <label for="index6" >E-Mail: </label><br>
                        <input type="text" id="index6" style="width: 100%" name="mail" value="<?php echo _getText(4); ?>">
                        <br><br>
                        <label for="index7" >Straße Hausnummer: </label><br>
                        <input type="text" id="index7" style="width: 100%" name="street" value="<?php echo _getText(8); ?>">
                        <br><br>
                        <label for="index8" >PLZ Stadt: </label><br>
                        <input type="text" id="index8" style="width: 100%" name="city" value="<?php echo _getText(9); ?>">
                        <br><br>
                        <label for="index9" >Telefonnummer: </label><br>
                        <input type="text" id="index9" style="width: 100%" name="phone" value="<?php echo _getText(10); ?>">
                        <br><br>
                        <label for="index9" >Umsatzsteuernummer: </label><br>
                        <input type="text" id="index10" style="width: 100%" name="ust" value="<?php echo _getText(12); ?>">
                        <br><br>
                        <label for="index9" >Wirtschafts-ID: </label><br>
                        <input type="text" id="index11" style="width: 100%" name="wid" value="<?php echo _getText(13); ?>">
                        <br><br><br>
                      <p><input class="btn btn-primary" type="submit" value="Speichern"></p>
                        
                        
                    </div>
                </div></form>
            </div>
            <div class="col-md-3 col-sm-6" style="width:50%"><form action="admin.php#kontakt" method="post">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>Kontaktformular</h4>
                    </div>
                    <div class="panel-body" style="text-align:left">
                    
                        <input type="hidden" name="change" value="7">
                        <label for="index10" >Betreff: </label><br>
                        <input type="text" id="index10" style="width: 100%" name="betreff" value="<?php echo _getText(5); ?>">
                        <br><br>
                        <label for="index11" >Absender: </label><br>
                        <input type="text" id="index12" style="width: 100%" name="abs" value="<?php echo _getText(7); ?>">
                        <br><br>
                        <label for="index13" >Text: </label><br>
                        <textarea name="email_text" id="index13" style="width:100%;height:112px"><?php echo _getText(6); ?></textarea>
                         <br><br>
                         <label for="index11" >ReCaptcha Site-Key: </label><br>
                        <input type="text" id="index12" style="width: 100%" name="skey" value="<?php echo _getText(14); ?>">
                        <br><br>
                         <label for="index11" >ReCaptcha Site-Secret: </label><br>
                        <input type="text" id="index12" style="width: 100%" name="ssecret" value="<?php echo _getText(15); ?>">
                        <br><br>
                        
                      <p><input class="btn btn-primary" type="submit" value="Speichern"></p>
                        
                        
                    </div>
                </div></form>
            </div>
            
            
        </div>     