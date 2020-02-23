
<style>
    body
    {
        text-align:center;
        font-size:30px;
        font-family:"Work Sans", sans-serif;
        background-color:#beebe9;
    }
 
</style>
<?php
        
    $aname=$_POST['aname'];
    $btitle=$_POST['btitle'];
    $blog=$_POST['blog'];
    $con=mysqli_connect('localhost','root','','blogs');
    $query="INSERT INTO `blogdetails`(`authorName`, `blogTitle`, `blogBody`) VALUES ('$aname','$btitle','$blog')";
    $run=mysqli_query($con,$query);
    if($run==true)
    {
        echo "Thank you for submitting the blog";
       echo "</br>";
       echo "The details are as follows:";
       echo "</br>";
       echo "Author name:" . $aname;
       echo "</br>";
        echo"Blog Title:".$btitle;
        echo'<div id="msgThree">This page will automatically redirect to homepage in 7 seconds'.'</div>';

    header('Refresh: 7; URL=http://localhost/test/phplogin/home.php');
    }
    else
    {
        echo "Server failure";
    }

   

?>
