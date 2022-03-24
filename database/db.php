
<?php
  // ini_set('display_errors', 1);
  Class DB{

    
    // public $server = "localhost";
    // public $username = "softeckc_wp521";
    // public $password = "S(ZZ-88j1p";
    // public $dbname = "softeckc_wp521";

  
    public $server = "localhost";
    public $username = "root";
    //  public $password = "rafsan123";
    public $password = "";
    public $dbname = "shop";
    public  $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password,$this->dbname);

      if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
         }
      // echo "Connected successfully";
        
    }

     function query($sql)
     {
        $result = mysqli_query($this->conn, $sql);
        return $result;
       
        
     }

     function insert($sql)
     {
      mysqli_query($this->conn, $sql);
     }

     function update($sql)
     {
      mysqli_query($this->conn, $sql);
     }

  }

?>