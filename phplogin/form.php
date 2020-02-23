
<style>
   
    table, th, td {
  border: 1px solid green;
  font-family: "Work Sans", sans-serif;

}
table
{
    transform: translate(100%, 50%);

}
th 
{
    font-size:1.5rem;
}
</style>

<?php

$link = mysqli_connect("localhost", "root", "", "userformdata");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $sql = "SELECT * FROM alldata WHERE 1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Message</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }        
    
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 mysqli_close($link);
 ?>