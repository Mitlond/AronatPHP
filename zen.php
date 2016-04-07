<meta charset="utf-8">
<?php
$str = file("путь к файлу");
$str_rep =  "01234567890!#%?/.,\'\"";
$str_end = "                    ";//кол-во пробелов = кол-во символов
$h = fopen("новый файл","a");
foreach ($str as $val)
{
    $val = strtr($val,$str_rep,$str_end);
    $val = str_replace(" ","",$val);
    fputs($h,$val)
}
fclose($h)
?> 