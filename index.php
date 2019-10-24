<?php
echo "Password 1: ";
echo crypt("Satish", 'SA')."<br/><br/>";
echo "Password 2: ";
echo password_hash("Satish", PASSWORD_DEFAULT)."<br/><br/>";

?>