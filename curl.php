<?php 
$value = $_POST['value'];
$from = $_POST['from'];
$ip = $_SERVER['REMOTE_ADDR'];
echo "Your name: ".$value." from: ".$from." and IP: ".$ip."\n";
$today=date("Y-m-d H:i:s");
$file="curltest.log";
if(file_exists($file))
{
$fp=fopen($file,"a");
}else{
$fp=fopen($file,"w");
}
//prepare a line of record to write to a file, format:CSV
$record=$today.",".$from.",".$ip.",".$value."\n";
fwrite($fp, $record);
fclose($fp);
?>