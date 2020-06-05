<?php
class DBConnection
{
    //data members
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db";
    private $conn;

    //methods
    public function __construct()
    {
        try
        {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES   => false,];
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password, $options);

        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function closeConnection()
    {
        $this->conn = null;
    }

    /**
    * @param string $query
    * @param array $params
    * @return $stmt
    * @throws Exception
    */
    public function executeQuery($query, $params = array())
    {
        // validate parameters
        if(empty($query))
        {
            throw new Exception('SQL statement is missing.');
        }
        else if(!is_array($params))
        {
            throw new Exception('Params is not an array');
        }
        // prepare query
        $stmt = $this->conn->prepare($query);
        //bind parameters
        foreach($params as $param => &$value) {
            $stmt->bindParam($param, $value);
        }
        //execute query
        $stmt->execute();
        return($stmt);
    }
}

?>
