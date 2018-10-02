<?php
session_start();
session_destroy(); // destroy session
echo "<script>document.location='index.php'</script>";
//echo $_SESSION['login'];
?>
