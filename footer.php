

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12"> 
                <hr>
                    <p style="font-family: 'Open Sans Condensed', sans-serif;  font-size: 12pt;">Copyright &copy; <?php echo _getTitle(3)." "; echo date("Y");  ?> </p>
                </div>
                <div class="col-lg-12" style="text-align:right;"> 
                <?php 
					if(!isset($_SESSION['username']) == _getTitle(11)) 
  					 { 
                    echo "<p style=\"
    top: -30px;
    position: relative;\"><a href=\"page.php?p=Login\" title=\"Login\">Login</a></p>";
					 }else{
					echo "<p  style=\"
    top: -30px;
    position: relative;\"><a href=\"page.php?p=Login\" title=\"Login\">Logout</a></p>";
					 }
					 ?>
                </div>
            </div>
        </footer>
        
            </div>
    <!-- /.container -->

    <!-- jQuery -->
    
	<script src="js/jquery.js" type="text/javascript"></script>
		
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
      <script type="text/javascript">$(document).ready(function() {
   $('textarea[maxlength]').keyup(function(){
      var max = parseInt($(this).attr('maxlength'));
 
      if($(this).val().length > max){
         $(this).val($(this).val().substr(0, max));
      }
      
      $(this).parent().find('.charleft').html(max - $(this).val().length);
   });  
});</script>


    </body>

</html>