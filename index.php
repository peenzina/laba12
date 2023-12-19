
<?php
$fd = fopen("ip.txt",'r') or die('Error');
$fdq = fopen("input.txt",'w+') or die('Error');
$line = fgets($fd);
preg_match("/\b((((1?\d?\d)|(2[0-4]\d)|(25[0-5]))\.){3}((\d)|(\d\d)|(1\d\d)|(2[0-4]\d)|(25[0-5]))\b)|(([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}\b)/", $line, $result);

if($result[0] != null){
    fwrite($fdq, $result[0]);
} else {
    fwrite($fdq, "IP неправильный ыы");
}
fclose($fd);
fclose($fdq);
?>
