<?php
// Initializeaza sesiunea
session_start();

// Deseteaza toate variabilele din sesiune
$_SESSION = array();
 
// distruge sesiunea
session_destroy();
 
header("location: index.php");
exit;
?>