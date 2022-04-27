<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

echo <<<EOT
<html><head><style></style></head><body>
<form id="form" action="" method="post">
<input type="hidden" name="name" value="$name"/>
<input type="hidden" name="amount" value="$username"/>
<input type="hidden" name="email" value="$password"/>

</form>


</body></html>
EOT;

?>
