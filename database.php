<?php
class Database
{
    // for security use a .env file to store your database credentials.
    private $dsn_data = "mysql:host=localhost;dbname=pegpem.com";
    private $dsn;
    private $username_data = "root";
    private $username;
    private $password_data = "";
    private $password;
    private $connection = null;
    public function __construct()
    {
        $this->dsn = $this->dsn_data;
        $this->username = $this->username_data;
        $this->password = $this->password_data;
    }
    public function Connect()
    {
        try {
            if ($this->connection == null) {

                $this->connection = new PDO($this->dsn, $this->username, $this->password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
            }
            return $this->connection;
        } catch (Exception $e) {
            if ($e->getMessage()) {
                $this->logError($e);
            }
        }
    }

    private function logError(object $e)
    {
        //log this error to a log file.
        $timestamp = time();
        $error_time = date("y/m/d h:i:s A", $timestamp);
        echo $log = "Error (database connection): " .  $e->getMessage() . ", on file: " . $e->getFile() . ", on line: " . $e->getLine() . " on : " .  $error_time . "." . PHP_EOL;
        $file_name = "file.log";
        if (file_exists($file_name)) {
            file_put_contents($file_name, $log, FILE_APPEND | LOCK_EX);
        }
    }
}

$connect = new Database();
$connect->Connect();