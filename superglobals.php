<?php

echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];
?>
<br><br><br><!-- comment -->
<form method="get" action="submitserver.php">
    Name: <input type="text" name="fname"><!-- comment -->
    <input type="submit">
</form>