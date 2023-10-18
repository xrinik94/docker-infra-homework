<?php

echo "<pre>";
print_r(get_loaded_extensions());
echo "<pre/>";

define('MYSQL_HOST', getenv('MYSQL_HOST'));
define('MYSQL_USER', getenv('MYSQL_USER'));
define('MYSQL_PASSWORD', getenv('MYSQL_PASSWORD')); 
define('MYSQL_DATABASE', getenv('MYSQL_DATABASE'));
define('MONGODB_CONN_STRING', getenv('MONGODB_CONN_STRING'))

// // Create MONGO connection

// $con = new MongoDB\Client('mongodb://$MONGODB_CONN_STRING:27017');

// // Creating Database  
// $db = $con->javatpoint;  
// // Creating Document  
// $collection = $db->employee;  
// // Insering Record  
// $collection->insertOne( [ 'name' =>'Peter', 'email' =>'peter@abc.com' ] );  
// // Fetching Record  
// $record = $collection->find( [ 'name' =>'Peter'] );  
// foreach ($record as $employe) {  
// echo $employe['name'], ': ', $employe['email']."<br>";  
// }  

// Create MYSQL connection

$conn = mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASSWORD, $MYSQL_DATABASE);

// Check MYSQL connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MYSQL";

mysqli($conn);

?>
