<?php
class ConnectDb{
    private static $instance = null;
    private $conn;

    private $servername = "localhost";
    private $username = "testUser";
    private $password = "test";
    private $dbname = "tbdolgi";

    private function __construct(){
        $this->conn = new PDO("mysql:host={$this->servername};
        dbname={$this->dbname}", $this->username,$this->password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new ConnectDb();
      }
     
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
}