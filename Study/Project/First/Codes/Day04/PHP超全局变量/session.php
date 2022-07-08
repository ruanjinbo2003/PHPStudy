<?php
//session_set_cookie_params(30);
session_start();
setcookie(session_name(),session_id(),time()+20);
/*print_r(session_get_cookie_params());
echo session_id();*/
/*session_name("FYSESSION");
echo session_name();*/
/*echo session_status();*/
$_SESSION['username'] = "lisisi";
$_SESSION['age'] = 28;