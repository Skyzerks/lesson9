<?php

$_SESSION['flash_msg']='User '.$_SESSION['user_name'].' has logged out';
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['login']);
header('Location: /');
exit;