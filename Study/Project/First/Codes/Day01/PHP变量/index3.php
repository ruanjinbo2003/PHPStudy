<?php
static $a = 3;
function add () {
    global $a;
    ++$a;
    echo $a;
}
add();
add();
add();
echo "<br />";
echo $a;  // 3  ?  4   //4
echo "<br />";

echo $_SERVER["SERVER_NAME"];
echo "<br />";
echo $_SERVER["HTTP_HOST"];
echo "<br />";
echo $_SERVER["SERVER_ADDR"];
echo "<br />";
echo $_SERVER['REMOTE_ADDR'];
echo "<br />";
echo $_SERVER["SERVER_PORT"];
echo "<br />";

print_r($_REQUEST);


