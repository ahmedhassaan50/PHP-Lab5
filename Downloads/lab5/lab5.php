<?php
session_start ();

 if (isset($_SESSION ['visitNumber'])) {
    $_SESSION ['visitNumber'] +=1;
    $alert= "Hi, This is the visit number ";
    echo ($alert . $_SESSION ['visitNumber']);
    }
    else
    $_SESSION ['visitNumber']=1;
?>
