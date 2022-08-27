<?php
$APIname = 'img API';
$image_file = 'img.txt';
//调用统计
if(is_file("PVIP.txt")){
    if($_SERVER['HTTP_REFERER']!=NULL){
    $count=$_SERVER['HTTP_REFERER']."000"."\n";
    file_put_contents("PVIP.txt", $count, FILE_APPEND);
    $file=file("PVIP.txt");
    $file2=preg_replace('/000/', '',$file);
    $array=array_values(array_unique($file2));
    file_put_contents("PVIP.txt",$array);
    error_log(date('Y/m/d H:i:s:【').$APIname.'】调用来源：'.$_SERVER['HTTP_REFERER'].PHP_EOL,3, "./log.log");
    } else {
    error_log(date('Y/m/d H:i:s:【').$APIname.'】无调用来源'.PHP_EOL,3, "./log.log");}
} else {
    file_put_contents("PVIP.txt","");
    error_log(date('Y/m/d H:i:s:').'无PVIP文件，已创建'.PHP_EOL,3, "./log.log");
}
if(is_file("pvimg.txt")){
    $count=file_get_contents("pvimg.txt");
    $count++;
    file_put_contents("pvimg.txt", $count);
} else {
    file_put_contents("pvimg.txt",1);
}
//是否存在
if(file_get_contents($image_file)){
$data = file($image_file); //将文件存放在一个数组中;
$num = count($data); //条数;
$id = mt_rand(0,$num-1); //随机数字;
$url = chop($data[$id]); //显示第几行数据,并去除空格;
header("location:$url");}
?>