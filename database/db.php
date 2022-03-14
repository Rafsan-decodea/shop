
<?php
  ini_set('display_errors', 1);
  Class DB{
  
    public $server = "localhost";
    public $username = "root";
    public $password = "rafsan123";
    public $dbname = "shop";
    public  $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password,$this->dbname);

      if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
         }
      echo "Connected successfully";
        
    }

     function query()
     {
        $sql = "SELECT * FROM shop_users";
        echo (mysqli_query($this->conn, $sql));
     }

  }

  $db = new DB();
  $db->query();

?>