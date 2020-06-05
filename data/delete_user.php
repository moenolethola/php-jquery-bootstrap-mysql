<?php
session_start();

include_once("../DBConnection.php");
$conn = null;
$count = 0;

if (isset($_POST['id']))
{
    $id = $_POST['id'];
    try
    {
        //initialise connection
        $conn = new DBConnection();
        //set delete course query
        $query = "DELETE FROM userinfo WHERE ID=:id";
         //set parameters
        $params = array(":id" => $id);
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