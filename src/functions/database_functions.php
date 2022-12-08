<?PHP
$GCLOUD = false;

function connect_to_db() {
    global $GCLOUD;
    if($GCLOUD) {
        //GCLOUD DATABASE
        $instanceUnixSocket = getenv('INSTANCE_UNIX_SOCKET'); 
        $user = getenv('CLOUDSQL_USER');      
        $password = getenv('CLOUDSQL_PASSWORD');  
        $dbname = getenv('CLOUDSQL_DB'); 
        $ds = sprintf(
            'mysql:dbname=%s;unix_socket=%s',
            $dbname,
            $instanceUnixSocket
        );
        try {
            $db = new PDO($ds, $user, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $ex) {
            print_r($ex);
            echo "Cannot connect to the database. Please try again later.";
        }
    } 
    else {
        //LOCAL DATABASE
        $databasehost = "localhost";
        $database = "mydb";
        $databaseuser = "root";
        $databasepassword = "";
        $dsn = "mysql:host=$databasehost;dbname=$database;charset=UTF8";

        $pdo = new PDO($dsn, $databaseuser, $databasepassword);
        return $pdo;
    }
}