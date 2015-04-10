<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	if(!empty($_POST['logout'])){
		session_destroy();
		header('Location: /page.php?p=Login');
		}else if(!empty($_POST['cpw'])){
			$pass = md5($_POST['pass']);
			_setText(11,$pass);
		}else{
	if(empty($_POST['user'])||empty($_POST['pass']))
   {
	echo "Bitte Usernamen und Passwort eigeben!";
	return false;
   }
	$_user = _getTitle(11);
	$_pass = _getText(11);
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	if($user == $_user & $pass == $_pass){
	$_SESSION['username'] = $user;
	}else{
	echo "Falscher Benutzername oder Passwort";	
	}
	
		
		
	}
}
?>

           <div class="row">
           <div class="col-md-3 col-sm-6" style="width:35%;left:33%"> 
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      			
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body" style="height:259px">
                    <?php 

					if(isset($_SESSION['username']) == _getTitle(11)) 
  					 { 
  					 echo "<p>Hallo ".$_SESSION['username']."</p>"; 
					 echo "<p><a href=\"admin.php\">zum Adminbereich</a></p>"; 
					 echo " <form action=\"page.php?p=Login\" method=\"post\">
						  <p><label for=\"pass\">Neues Passwort: </label><br>
                  		  <input type=\"password\" id=\"pass\"  name=\"pass\" value=\"\"></p>
        					<input type=\"hidden\" name=\"cpw\" value=\"1\">
                          <input class=\"btn btn-primary\" type=\"submit\" style=\"margin:5px\" value=\"Passwort Ändern\">
                    </form>";
					 
					 
					 echo "
                    <form action=\"page.php?p=Login\" method=\"post\">
        					<input type=\"hidden\" name=\"logout\" value=\"1\">
                          <input class=\"btn btn-primary\" type=\"submit\" style=\"margin:5px\" value=\"Logout\">
                    </form>";
  					 } else{
					echo "
                    <form action=\"page.php?p=Login\" method=\"post\">
                    	<p><label for=\"user\">Username: </label><br>
                  		  <input type=\"text\" id=\"user\"  name=\"user\" value=\"\"></p>
                          <p><label for=\"pass\">Passwort: </label><br>
                  		  <input type=\"password\" id=\"pass\"  name=\"pass\" value=\"\"></p>
                          <input class=\"btn btn-primary\" type=\"submit\" style=\"margin:5px\" value=\"Login\">
                    </form>";
					
					}
                            ?>      </div>
                </div>
            </div>
            </div>