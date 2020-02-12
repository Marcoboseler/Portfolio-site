<?

$dbhost = "localhost";
$dbname = "vliegtuigen";
$dbuser = "root";
$dbpassword = "";
                                    ///Database connection
try{
    global $pdo;
    $pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";",$dbuser, $dbpassword);
   }catch(PDOException $ex) {
    echo "Disconnected from PHPmyadmin";
}











































