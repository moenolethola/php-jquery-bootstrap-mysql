<?php

include_once("../DBConnection.php");

$data = "";
$count = 0;



  // display details
  try
  {
      //initialise connection
      $conn = new DBConnection();

      $query = "SELECT * FROM userinfo ORDER BY ID DESC";


      //execute query
      $stmt = $conn->executeQuery($query);
      //get number of records
      $count = $stmt->rowCount();

      if ($count > 0)
      {
          //display institutions in table form
          $data .= '<table id="data_table">';
          $data .= '<th> Username </th><th>Password</th>';
          $data .= '<th>Update</th>';
          $data .= '<th>Delete</th>';
          while ($row = $stmt->fetchObject())
          {
              $data .= '<tr>';
              $data .= '<td>'.$row->nvUsername.'</td><td>'.$row->nvPassword.'</td>';
              $data .= '<td>
                        <a class="btn" type="button" onClick="readUserUpdate('.$row->ID.')">Edit</a>
                        </td>
                        <td>
                        <a class="btn" type="button" onClick="deleteUser('.$row->ID.')">Delete</a>
                        </td>
                        </tr>';
          }
          $data .= '</table>';
          echo $data;
      }
      else
      {
        echo "Not found ";
      }
      //close connection
       $conn->closeConnection();
  }
  catch(Exception $e)
  {
      echo $e->getMessage();
  }

?>
