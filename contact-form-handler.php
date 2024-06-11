<?php

if(isset($_POST['submit'])){
    $to = "liviaifti1@gmail.com";
    $subject ="Test";
    $txt = "TEST";
    if(mail($to,$subject,$txt)){
        echo "<h1> Sent Successfully";
    }
    else{
        echo "Something went wrong";
    }

}
?>