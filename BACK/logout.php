<?php

session_start();
session_unset();
session_destroy();

//retourner à login.html
header("location: ../index.php");