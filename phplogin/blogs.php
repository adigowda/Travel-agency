<link rel="stylesheet" href="a.css">
<?php

    echo "<h1 id='head'>"."OUR BLOG". "</h1>";
$link = mysqli_connect("localhost", "root", "", "blogs");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $sql = "SELECT * FROM blogdetails";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div>";
        while(($row = $result->fetch_assoc())){
            
            echo "<div id='ob'>";
                
                echo "<h2 id='title'>" . $row['blogTitle'] . "</h2>";
                echo "<p>" . $row['blogBody'] . "</p>";
                echo "<h4 id='auth'>" . $row['authorName'] . "</h4>";
            echo "</div>";
            
        }
        echo "</div>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 mysqli_close($link);
?>