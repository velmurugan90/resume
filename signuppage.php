<?php

$dname="vel";
$dmailid="vel123@gmail.com";

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    
    $mailid = $_POST['mailid'];

        if(empty($name) || empty($mailid)) {
            
            header("Location: ./home.php?signup=empty&mailid=$mailid&name=$name");
            exit();
        }
        
        else if(!filter_var($mailid,FILTER_VALIDATE_EMAIL)){
             header("Location: ./home.php?signup=mailid&mailid=$mailid&name=$name");
                    exit();
       }
        
        else if($name==$dname and $mailid==$dmailid){
        header("Location: ./home.php?signup=success");
         exit();
        }
    }
else
{
     header("Location: ./home.php");
     exit();
}
?>
