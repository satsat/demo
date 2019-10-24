<?php
echo "Password 1: ";
echo crypt("Satish", 'SA')."<br/><br/>";
echo "Password 2: ";
echo password_hash("Satish", PASSWORD_DEFAULT)."<br/><br/>";
$options = [
    'cost' => 12,
];
echo "Password3: ".password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
?>