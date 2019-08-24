<?php 
session_start();
session_destroy();
header("Location: http://localhost/php/sample/index.php", true, 301);
?>