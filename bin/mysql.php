<?php
function getConnected() {
   $mysqli = new mysqli('localhost', 'root', 'secret', 'portfolio');

   if($mysqli->connect_error) 
     die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		$mysqli->query("SET NAMES 'utf8'");
   return $mysqli;
}

function _mysqlquery($sql){
if(!$result = getConnected()->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}	
return $result;
}

function _getTitle($id){
$abfrage = "SELECT title FROM text WHERE id = '".$id."'";
$row = _mysqlquery($abfrage)->fetch_assoc();
    return $row['title'];
}

function _getText($id){
$abfrage = "SELECT text FROM text WHERE id = '".$id."'";
$row = _mysqlquery($abfrage)->fetch_assoc();
    return $row['text'];
}
function _getImageURL($id){
$abfrage = "SELECT path FROM images WHERE id = '".$id."'";
$row = _mysqlquery($abfrage)->fetch_assoc();
    return $row['path'];
}
function _getImageURLS($path){
$abfrage = "SELECT path FROM images WHERE path = '".$path."'";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}
function _getImageURLB($path){
$abfrage = "SELECT path FROM portfolio_images WHERE path = '".$path."'";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}
function _getImageURLC($path){
$abfrage = "SELECT path FROM portfolio_text WHERE path = '".$path."'";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}
function _getImageTitle($id){
$abfrage = "SELECT title FROM images WHERE id = '".$id."'";
$row = _mysqlquery($abfrage)->fetch_assoc();
    return $row['title'];
}
function _getNumberItems(){
$abfrage = "SELECT id FROM portfolio_text";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}
function _getNumberSlides(){
$abfrage = "SELECT id FROM images WHERE name LIKE 'slide%'";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}

function _getSlides(){
$abfrage = "SELECT * FROM images WHERE name LIKE 'slide%'";
$row = _mysqlquery($abfrage);
    return $row;
}
function _getProjects(){
$abfrage = "SELECT id,titel,heading,besch,button,shead,short,path FROM portfolio_text";
$row = _mysqlquery($abfrage);
    return $row;
}
function _getNumberProImg($id){
$abfrage = "SELECT id FROM portfolio_images WHERE project='".$id."'";
$row = _mysqlquery($abfrage)->num_rows;
    return $row;
}
function _getProImgs($id){
$abfrage = "SELECT * FROM portfolio_images WHERE project='".$id."'";
$row = _mysqlquery($abfrage);
    return $row;
}

function _getProject($id){
$abfrage = "SELECT titel,heading,besch,button,shead,short,path FROM portfolio_text WHERE id='".$id."'";
$row = _mysqlquery($abfrage);
    return $row;
}

function _setImageUrl($id,$path){
$abfrage = "UPDATE images SET path = '".$path."' WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}

function _setTitle($id,$title){
$abfrage = "UPDATE text SET title = '".$title."' WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _setTest($id,$text){
$abfrage = "UPDATE text SET text = '".$text."' WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _setText($id,$text){
$abfrage = "UPDATE text SET text = '".$text."' WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _delSlide($id){
$abfrage = "DELETE FROM images WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _addSlide($cap,$path){
$abfrage = "INSERT INTO images (`id`, `name`, `path`, `title`, `x`, `y`) VALUES (NULL, 'slide3', '".$path."', '".$cap."', '1900', '1080')";	
$row = _mysqlquery($abfrage);
return true;
}
function _delProj($id){
$abfrage = "DELETE FROM portfolio_text WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
$abfrage = "DELETE FROM portfolio_images WHERE project = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _addProj($short,$head,$deschead,$button,$shortdesc,$csed,$path){
$abfrage = "INSERT INTO portfolio_text (id, titel, heading, besch, button, short, shead, path) VALUES (NULL, '".$head."', '".$deschead."', '".$csed."', '".$button."', '".$shortdesc."', '".$short."', '".$path."')";	
$row = _mysqlquery($abfrage);
}
function _addImg($item,$image){
$abfrage = "INSERT INTO portfolio_images (`id`, `project`, `path`) VALUES (NULL, '".$item."', '".$image."')";	
$row = _mysqlquery($abfrage);
return true;
}
function _delImg($id){
$abfrage = "DELETE FROM portfolio_images WHERE id = '".$id."'";	
$row = _mysqlquery($abfrage);
return true;
}
function _updateProj($id,$short,$head,$deschead,$button,$shortdesc,$csed,$path){
$abfrage = "UPDATE portfolio_text SET short = '".$shortdesc."', titel = '".$head."', heading='".$deschead."', besch='".$csed."', button='".$button."', shead='".$short."', path='".$path."' WHERE `portfolio_text`.`id` = ".$id."";
$row = _mysqlquery($abfrage);
return true;
}
?>