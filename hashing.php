<?php
$password = 123;
echo password_hash($password,PASSWORD_ARGON2I);

?>