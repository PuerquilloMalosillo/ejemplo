
<?php 

 $dbhost = 'localhost';
 $dbname = 'dbdropdown';  
 $dbuser = 'root';                  
 $dbpass = '';                  
 
 try{
  
  $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }


//$conexion = mysql_connect("localhost","josue","josue2804");
if(!$dbcon){
    die("NO CONECTO",mysql_error());
}

else{
  echo "conectado";
}
 mysql_select_db("cars",$conexion); 
?>