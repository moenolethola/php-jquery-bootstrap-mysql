<?php

include_once("../DBConnection.php");

$count = 0;
$records = array();
if (isset($_POST['id']) && isset($_POST['id']) != "")
{
    $id = $_POST['id'];

    try
    {
        //initialise connection
        $conn = new DBConnection();

        //set query
        $query = "SELECT * FROM userinfo WHERE ID=:id";

        //set parameters
        $params = array(":id" => $id);
        //execute query
        $stmt = $conn->executeQuery($query, $params);
        //get number of records
        $count = $stmt->rowCount();
        if ($count > 0)
        {
          $row = $stmt->fetch();
          $records = $row;
        }
        else
        {
          $records['nvMessage'] = 'error';
        }
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
     //close connection
     $conn->closeConnection();
}
// display JSON data
echo json_encode($records);
?>