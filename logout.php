<?php
session_start();
session_destroy();
header("Location:home.php?ref=Logged Out.<br> Please Login Again");
exit();

?>