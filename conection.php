
<style>
    body
    {
        text-align:center;
        font-size:30px;
        font-family:"Work Sans", sans-serif;
        background-color:#beebe9;
    }
  #msgOne
    {
        margin-top:20%;
    }
    #msgTwo
    {
        margin-top:10px;
    }
    #msgThree
    {
        margin-top:40px;
    }
</style>
<?php

    $name=$_POST['username'];
    $email=$_POST['useremail'];
    $message=$_POST['message'];
    $con=mysqli_connect('localhost','root','','userformdata');
    $query="INSERT INTO `alldata`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $run=mysqli_query($con,$query);
    if($run==true)
    {
        echo '<div id="msgOne">Thanks for writing on us,' .$name.'</div>';
        echo "<br>";
        echo '<div id="msgTwo">We will get back to you soon on your email:'.$email.'</div>';
        echo'<div id="msgThree">This page will automatically redirect to homepage in 10 seconds'.'</div>';

    header('Refresh: 10; URL=http://localhost/test/');

    }
    else
    {
        echo "Server failure";
    }

    $script = file_get_contents('File.js');
   echo "<script>".$script."</script>";

?>
