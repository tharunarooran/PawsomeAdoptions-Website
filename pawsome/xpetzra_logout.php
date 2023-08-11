<?php

session_start();
if(session_destroy()){
    header("location: xpetzra_login.php");
}