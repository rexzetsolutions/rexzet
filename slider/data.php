<?php 

global $mysqli;
$mysql_db_hostname = "localhost";
$mysql_db_user = "orienghb_slider";
$mysql_db_password = "slider";
$mysql_db_database = "orienghb_slider";


@$mysqli = new mysqli($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database);

//Output any connection error
if ($mysqli->connect_error) {
    //die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$range = $_POST['range'];
global $mysqli;
$data = '';
$query = "SELECT * FROM rangeslider WHERE id = $range";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
    while( $row = $result->fetch_array(MYSQLI_ASSOC)){
    	echo '<p>' . $row['price'] . '</p>';
    }
}else{
   echo $data;
}

?>