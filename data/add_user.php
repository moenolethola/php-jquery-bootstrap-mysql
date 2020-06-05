<?php
include_once("../DBConnection.php");

$count = 0;
if (isset($_POST['nvUsername']) && isset($_POST['nvPassword']))
{
    $nvUsername = $_POST['nvUsername'];
    $nvPassword = $_POST['nvPassword'];

    try
    {
        //initialise connection
        $conn = new DBConnection();

        //set UPDATE query
        $query = "INSERT INTO userinfo (nvUsername,
                                        nvPassword)
                                VALUES (:nvUsername,
                                        :nvPassword)";

        //set parameters
        $params = array(":nvUsername" => $nvUsername, ":nvPassword" => $nvPassword);
        //execute query
        $stmt = $conn->executeQuery($query, $params);
        //get number of records
        $count = $stmt->rowCount();
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
     //close connection
     $conn->closeConnection();
}
echo $count;
?>