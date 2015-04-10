<?php include("header.php"); ?>
<?php
if(!isset($_SESSION['username'])) 
   { 
   echo "Bitte erst <a href=\"page.php?p=Login\">einloggen</a>";
   exit; 
   } 
   
   ?>
<?php 

if($_POST['change'] == 1){
	if(empty($_POST['index_pic']))
   {
	echo "Kein Bild Ausgewählt!";
	return false;
   }
   $url = $_POST['index_pic'];
   _setImageURL(4,$url);
}else if($_POST['change'] == 2){
	if(empty($_POST['index_title'])||empty($_POST['index_head']))
   {
	echo "Nicht alle Felder Ausgefüllt!";
	return false;
   }
	$title = $_POST['index_head'];
	$head = $_POST['index_title'];
	_setTitle(3,$head);
	_setTitle(2,$title);
}else if($_POST['change'] == 13){
	if(empty($_POST['einschalten']))
   {
	echo "Nicht alle Felder Ausgefüllt!";
	return false;
   }
	$title = $_POST['einschalten'];
	_setTitle(16,$title);
}else if($_POST['change'] == 14){
	if(empty($_POST['leistungen_pic']))
   {
	echo "Kein Bild Ausgewählt!";
	return false;
   }
   $url = $_POST['leistungen_pic'];
   _setImageURL(18,$url);
}else if($_POST['change'] == 15){
	if(empty($_POST['leistungen_text']))
   {
	echo "Kein Text Eingegeben!";
	return false;
   }
	$text= $_POST['leistungen_text'];
	_setText(16,$text);

}else if($_POST['change'] == 3){
	if(empty($_POST['index_text']))
   {
	echo "Kein Text Eingegeben!";
	return false;
   }
	$text= $_POST['index_text'];
	_setText(2,$text);

}else if($_POST['change'] == 4){
	if(empty($_POST['id']))
   {
	echo "Fehler beim Löschen der Slide!";
	return false;
   }
	$id= $_POST['id'];
	_delSlide($id);

}else if($_POST['change'] == 5){
	if(empty($_POST['index_cap'])|empty($_POST['index2_pic']))
   {
	echo "Fehler beim Anlegen der Slide!";
	return false;
   }
	$cap= $_POST['index_cap'];
	$path= $_POST['index2_pic'];
	_addSlide($cap,$path);

}else if($_POST['change'] == 6){
	if(empty($_POST['mail'])||empty($_POST['street'])||empty($_POST['city'])||empty($_POST['phone'])||empty($_POST['ust'])||empty($_POST['wid']))
   {
	echo "Nicht alle Felder Ausgefüllt!";
	return false;
   }
   $ust	= $_POST['ust'];
   $wid = $_POST['wid'];
	$mail = $_POST['mail'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	_setText(4,$mail);
	_setText(8,$street);
	_setText(10,$phone);
	_setText(9,$city);
	_setText(12,$ust);
	_setText(13,$wid);
}else if($_POST['change'] == 7){
	if(empty($_POST['abs'])||empty($_POST['betreff'])||empty($_POST['email_text'])||empty($_POST['skey'])||empty($_POST['ssecret']))
   {
	echo "Nicht alle Felder Ausgefüllt!";
	return false;
   }
	$mail = $_POST['abs'];
	$street = $_POST['betreff'];
	$city = $_POST['email_text'];
	$skey = $_POST['skey'];
	$ssecret = $_POST['ssecret'];
	_setText(7,$mail);
	_setText(5,$street);
	_setText(6,$city);
	_setText(14,$skey);
	_setText(15,$ssecret);
}else if($_POST['change'] == 8){
	if(empty($_POST['id']))
   {
	echo "Fehler beim Löschen des Portfolio Elements!";
	return false;
   }
	$id= $_POST['id'];
	_delProj($id);

}else if($_POST['change'] == 9){
	if(empty($_POST['short'])||empty($_POST['head'])||empty($_POST['deschead'])||empty($_POST['button'])||empty($_POST['shortdesc'])||empty($_POST['desc'])||empty($_POST['path']))
   {
	echo "Fehler beim Erstellen des Portfolio Elements!";
	return false;
   }
	$short= $_POST['short'];
	$head= $_POST['head'];
	$deschead= $_POST['deschead'];
	$button= $_POST['button'];
	$shortdesc= $_POST['shortdesc'];
	$csed= $_POST['desc'];
	$path= $_POST['path'];
	_addProj($short,$head,$deschead,$button,$shortdesc,$csed,$path);

}else if($_POST['change'] == 10){
	if(empty($_POST['item'])||empty($_POST['images']))
   {
	echo "Fehler beim Zusweisen der Bilder!";
	return false;
   }
	$item= $_POST['item'];
	$images= $_POST['images'];
	$zahl = count($images); 
	for($i=0; $i < $zahl; $i++) 
  		{ 
  		 _addImg($item,$images[$i]);
  		 } 

}else if($_POST['change'] == 11){
	if(empty($_POST['id']))
   {
	echo "Fehler beim Löschen des Bildes!";
	return false;
   }
	$id= $_POST['id'];
	_delImg($id);

}
else if($_POST['change'] == 12){
	 $id = $_POST['id'];
	$short= $_POST['short'];
	$head= $_POST['head'];
	$deschead= $_POST['deschead'];
	$button= $_POST['button'];
	$shortdesc= $_POST['shortdesc'];
	$csed= $_POST['desc'];
	$path= $_POST['path'];
	if(empty($_POST['short'])||empty($_POST['id'])||empty($_POST['head'])||empty($_POST['deschead'])||empty($_POST['button'])||empty($_POST['shortdesc'])||empty($_POST['desc'])||empty($_POST['path']))
   {
	echo "Fehler beim Bearbeiten!";
	echo $id;
	echo $short;
	echo $head;
	echo $deschead;
	echo $button;
	echo $shortdesc;
	echo $csed;
	echo $path;
	return false;
   }
   	$id = $_POST['id'];
	$short= $_POST['short'];
	$head= $_POST['head'];
	$deschead= $_POST['deschead'];
	$button= $_POST['button'];
	$shortdesc= $_POST['shortdesc'];
	$csed= $_POST['desc'];
	$path= $_POST['path'];
	_updateProj($id,$short,$head,$deschead,$button,$shortdesc,$csed,$path);
	

}

if($_GET['p'] == "edit"){
	
	 	if(empty($_POST['id']))
   {
	echo "Fehler beim Bearbeiten!";
	return false;
   }
	
	$id = $_POST['id'];
	
	$field = _getProject($id)->fetch_assoc();
   
	?>
   
   <!-- Page Content -->
    <div class="container">
    
     <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $_page; ?>
                </h1>
                  <?php
 						include('bin/breadcrumbs.php'); //Datei einbinden
 						$breadcrumbs = new SCWlib_Breadcrumbs; //Objekt erzeugen
						 $breadcrumbs->setReplaceUnderlines(true); //Unterstrich "_" ersetzen
 							$breadcrumbs->setUppercaseFirst(true); //Erster Buchstabe = Großbuchstabe
 							 $breadcrumbs->addReplacement('page', $_page); //gaestebuch -> gästebuch
						 $breadcrumbs->setUseReplacements(true); //Ersetzungen verwenden
						 $breadcrumbs->printBreadcrumbs(); //Brotkrumen einfügen
 
?>

            </div>
        </div>
        <!-- Features Section --><!-- Service Tabs -->
        <div class="row">
        <?php 

					if(isset($_SESSION['username']) == _getTitle(11)) 
  					 { 
  					 echo "
                    <form action=\"page.php?p=Login\" method=\"post\">
        					<input type=\"hidden\" name=\"logout\" value=\"1\">
                          <input class=\"btn btn-primary\" type=\"submit\" style=\"margin:5px;position:relative;left:93%\" value=\"Logout\">
                    </form>";
  					 } 
					 ?>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
     <div class="row">
<div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                 <div class="panel-heading">
                      			
                        <h4><?php echo $field['titel']; ?>- Bearbeiten</h4>
                    </div>
                   
                    <div class="panel-body" style="text-align:left">
                    
                    <form action="admin.php#portfolio" method="post">
                    <input type="hidden" name="change" value="12">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    
                    	<div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    	  <p><label for="short">Kurzüberschrift: </label><br>
                  		  <input type="text" id="short"  name="short" value="<?php echo $field['shead']; ?>"></p>
                          
                          <p><label for="head">Überschrift: </label><br>
                  		  <input type="text" id="head"  name="head" value="<?php echo $field['titel']; ?>"></p>
                          <p><label for="deschead">Beschreibung Überschrift: </label><br>
                  		  <input type="text" id="deschead"  name="deschead" value="<?php echo $field['heading']; ?>"></p>
                          <p><label for="button">Button: </label><br>
                  		  <input type="text" id="button"  name="button" value="<?php echo $field['button']; ?>"></p>
                         
                         </div></div></div>
                         <div class="col-md-3 col-sm-6" style="width:25%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                  
                    		<label for="shortdesc"> Kurzbeschreibung: </label><br>
                  		  <textarea name="shortdesc" id="shortdesc" style="width:100%;height:214px" maxlength="90"><?php echo $field['short']; ?></textarea>
                       
                        
                        
                        </div></div></div>
                        
                        
                        <div class="col-md-3 col-sm-6" style="width:50%">
                    <div class="panel panel-default text-center"> 
                    <div class="panel-body" style="text-align:left">
                    <label for="desc"> Beschreibung: </label><br>
                  		  <textarea name="desc" id="desc" style="width:100%;height:214px"><?php echo $field['besch']; ?></textarea>
                      
                    </div></div></div>
                    <div class="col-md-3 col-sm-6" style="width:100%"> 
                <div class="panel panel-default text-center">
                    <div class="panel-body" style="text-align:left">
                    	<label for="path"> Bildpfad: </label>
                         <input type="text" id="path" style="width: 25%" name="path" value="<?php echo $field['path']; ?>">
                        <p><div id="fileTree_5" style="overflow:scroll; width: 100%; height:156px";></div></p>
                        </div>
                </div>
            </div>
                    <input class="btn btn-primary" type="submit" style="margin:5px" value="Speichern"></form>
                    </div>
                </div>
            </div>
            
</div>
    </div>
    </div>
    
    <?php
	
}else{
	?>
	<!-- Page Content -->
    <div class="container">
    
     <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $_page; ?>
                </h1>
                  <?php
 						include('bin/breadcrumbs.php'); //Datei einbinden
 						$breadcrumbs = new SCWlib_Breadcrumbs; //Objekt erzeugen
						 $breadcrumbs->setReplaceUnderlines(true); //Unterstrich "_" ersetzen
 							$breadcrumbs->setUppercaseFirst(true); //Erster Buchstabe = Großbuchstabe
 							 $breadcrumbs->addReplacement('page', $_page); //gaestebuch -> gästebuch
						 $breadcrumbs->setUseReplacements(true); //Ersetzungen verwenden
						 $breadcrumbs->printBreadcrumbs(); //Brotkrumen einfügen
 
?>

            </div>
        </div>
        <!-- Features Section --><!-- Service Tabs -->
        <div class="row">
        <?php 

					if(isset($_SESSION['username']) == _getTitle(11)) 
  					 { 
  					 echo "
                    <form action=\"page.php?p=Login\" method=\"post\">
        					<input type=\"hidden\" name=\"logout\" value=\"1\">
                          <input class=\"btn btn-primary\" type=\"submit\" style=\"margin:5px;position:relative;left:93%\" value=\"Logout\">
                    </form>";
  					 } 
					 ?>
        </div>
        
        <div class="row">
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#start" data-toggle="tab"><i class="fa fa-database"></i> Startseite</a>
                    </li>
                    <li class=""><a href="#portfolio" data-toggle="tab"><i class="fa fa-database"></i> Portfolio</a>
                    </li>
                    <li class=""><a href="#leistungen" data-toggle="tab"><i class="fa fa-database"></i> Leistungen</a>
                    </li>
                    <li class=""><a href="#kontakt" data-toggle="tab"><i class="fa fa-database"></i> Kontakt</a>
                    </li>
                    <li class=""><a href="#upload" data-toggle="tab"><i class="fa fa-database"></i> Upload</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="start">
                		<?php include("bin/admin_index_text_menu.php"); ?>
                        <?php include("bin/admin_index_slider.php"); ?>
                   </div>
                    <div class="tab-pane fade" id="portfolio">
                        <?php include("bin/admin_portfolio_item.php"); ?>  </div>
                        <div class="tab-pane fade" id="leistungen">
                        <?php include("bin/admin_leistungen.php"); ?>  </div>
                    <div class="tab-pane fade" id="kontakt">
                        <?php include("bin/admin_kontakt.php"); ?>                    </div>
                    <div class="tab-pane fade" id="upload">
                        <h4>Upload Manager</h4>
						<script>
							function popup(URL) {
								w = window.open(URL, "", "toolbar=0,scrollbars=0,location=1,statusbar=1,menubar=1,resizable=0,width=800,height=500");
							}
						</script>
                        <p>&nbsp;</p>
                        <p><form action="#">
 							<input class="btn btn-primary" type=button value="Upload Manager öffnen" onClick="javascript:popup('bin/img/')">
						</form></p>
                	</div>
                    
                </div>

            </div>
        </div>
<?php
}



?>
    


<?php include("footer.php"); ?>

  <script src="js/jquery.easing.js" type="text/javascript"></script>
		<script src="js/jqueryFileTree.js" type="text/javascript"></script>
<link href="js/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_1').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("index");
        			loadPat.value = file.replace("../..", "");
				});
							
			});
		</script>
        <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_2').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("index2");
        			loadPat.value = file.replace("../..", "");
				});
							
			});
		</script>
            <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_3').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("path");
        			loadPat.value = file.replace("../..", "");
				});
							
			});
		</script>
          <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_4').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("multipleselect");
        			loadPat.innerHTML = loadPat.innerHTML+"<option value=\""+file.replace("../..", "")+"\" selected>"+file.replace("../..", "")+"</option>";
				});
							
			});
		</script>
        <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_5').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("path");
        			loadPat.value = file.replace("../..", "");
				});
							
			});
		</script>
               <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTree_Leistungen').fileTree({ root: '../../bin/img/server/php/files/', script: 'js/connectors/jqueryFileTree2.php' }, function(file) { 
					var loadPat = document.getElementById("leistungen_pic");
        			loadPat.value = file.replace("../..", "");
				});
							
			});
		</script>
        <script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>

</div>