<?php
$log_file='sound_log.txt';
$data=$_POST['data'];
//date_default_timezone_set("UTC");
$str=gmade("M d Y H:i:s",time()).','.$data."\n";
if(file_exists($log_file))
{
$fp=fopen($log_file,"a");
fwrite($fp, $str);
fclose($fp);
}else{
$fp=fopen($file,"w");
fwrite($fp, $str);
fclose($fp);
}
echo "Data is stored";
?>