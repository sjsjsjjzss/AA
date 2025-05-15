<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
if (!file_exists("ID")) {
$g = readline("admin id : ");
file_put_contents("ID", $g);
}
if (!file_exists("ch")) {
file_put_contents("ch", "Bello");
}
if (!file_exists("token")) {
$g = readline("token : ");
file_put_contents("token", $g);
}
if (!file_exists("type")) {
file_put_contents("type", "a");
}
if (!file_exists("in.json")) {
file_put_contents("in.json", "");
}
if (!file_exists("info.json")) {
file_put_contents("info.json", "");
}
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "No number";
file_put_contents('info.json', json_encode($info));
$info["number2"] = "No number";
file_put_contents('info.json', json_encode($info));
$info["number3"] = "No number";
file_put_contents('info.json', json_encode($info));
$info["number4"] = "No number";
file_put_contents('info.json', json_encode($info));
$info["number5"] = "No number";
file_put_contents('info.json', json_encode($info));
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
echo "Running Bot...\n";
shell_exec("pm2 start bot.php");
echo "Account Bot...\n";
shell_exec("pm2 start a.php");
shell_exec("pm2 start b.php");
shell_exec("pm2 start c.php");
shell_exec("pm2 start d.php");
shell_exec("pm2 start e.php");
shell_exec("pm2 start Band.php");
shell_exec("pm2 start m.php");
echo "Done\n\n\n\n";
