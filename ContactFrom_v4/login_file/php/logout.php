<?php
    session_start();
    
    session_unset();

    header("location: ../../UI_result\logout_succesfull.php");
?>