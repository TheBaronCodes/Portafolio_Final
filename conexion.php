<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'lcbd';
    
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn, "SELECT * FROM vip WHERE Usuario = '".$nombre."' AND Contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    header("Location: web_vip/html_vip/introHTML_vip.php");
}else if($nr == 0){
    echo '<scrypt lenguage="javascript">Alert("La cuenta ingresada no existe");</scrypt>';
    header("Location: registro.php");
}
?>