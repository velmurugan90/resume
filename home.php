<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Error Handlers</title>
</head>
<body>
    
    <fieldset id="login-form">
    <legend>Login Form</legend>
    <form action="signuppage.php"method="POST">
        <table id="content">
            <?php

                    $name='';
                    // echo $_GET['mailid'];
                    if(isset($_GET['name']))
                    {
                    $name = $_GET['name'];
                    }
                    $mailid='';
                    // echo $_GET['mailid'];
                    if(isset($_GET['mailid']))
                    {
                    $mailid = $_GET['mailid'];
                    }
                
            ?>
                <tr><td><input type="text"name="name" value="<?php echo $name;?>" placeholder="enter the name..."></td></tr>
                <tr><td><input type="text"name="mailid" value="<?php echo $mailid;?>" placeholder="enter the mail id..."></td></tr>
                <tr><td align="center"><button type="submit" name="signup">Sign Up</button></td></tr>
            </table>
        </form>
    </fieldset>
    <?php
        if(!isset($_GET['signup'])){
            exit();
        }
        else{
            $signupcheck = $_GET['signup'];
            if($signupcheck == "empty"){
                echo "<p class='error'>you are not fill all the fields...</p>";
                exit();
            }
            elseif($signupcheck=="mailid"){
                echo "<p class='error'>you are not fill the correct mail format...</p>";
                exit();
            }
            elseif($signupcheck=="success"){
                echo "<p class='success'>you successfully loged in...</p>";
                exit();
            }
        }
    ?>
    </body>
</html>
