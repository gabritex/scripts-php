<?php
$cookie_name = "user";
$cookie_value =  "$_POST[email]";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<form action="setcookie.php" method="post">
  Your name: <input type="text" name="fname"><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>