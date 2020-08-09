<?php
if(!isset($_SESSION)) 
    { 
        $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
        session_start();
    }