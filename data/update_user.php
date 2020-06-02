<?php
include_once("../DBConnection.php");

$count = 0;
if (isset($_POST['id']))
{
    $id = $_POST['id'];
    $nvUsername = $_POST['nvUsername'];
    $nvPassword = $_POST['nvPassword'];

    try
    {
        //initialise connection
        $conn = new DBConnection();

        //set UPDATE query
        $query = "UPDATE userinfo
                    SET nvUsername = :nvUsername,
                        nvPassword = :nvPassword
                    WHERE ID=:id";
        //set parameters
        $params = array(":nvUsername" => $nvUsername, ":nvPassword" => $nvPassword, ":id" => $id);
        //execute query
        $stmt = $conn->executeQueryWithParameters($query, $params);
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