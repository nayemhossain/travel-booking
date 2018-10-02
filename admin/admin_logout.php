<?php
session_start();
session_destroy(); // destroy session
echo "<script>document.location='admin_login.php'</script>"
//echo $_SESSION['login'];
?>
