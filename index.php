<!DOCTYPE html>
<html>
<head>
        <title>Daeth5 Email Api</title>
        <style>
                h1 {
                        text-align:center;
                }
        </style>
</head>
<?php

if (isset($_GET["email"])){

        $testString = htmlspecialchars($_GET["email"]);
        $to = filter_var($testString, FILTER_SANITIZE_EMAIL);
        echo "<h1>Currently processing email to $to</h1>";
        echo "<h1>This may take up to a minute</h1>";
        echo "<h1>Final status will be displayed below...</h1>";
        $subject = "Test Email CS4830";
        $message = "This is made for a class project in Web Dev. I'm a PHP API that sends emails!";
        $headers = "From: David <daeth5@mail.missouri.edu";

        if(mail($to, $subject, $message)){
                echo "<h1>mail to $to was sent!<h1>";
        }else{
                echo "<h1>mail to $to NOT sent :(</h1> ";

        }
}else{
        echo "<h1>Please submit email address in following format:<h1>";
        echo "<br><h1>https://thedavidemily.com/api/email/?email=YOUREMAIL</h1>";
        echo "<br><h1>This will take a few minutes</h1>";
}
?>

</html>
