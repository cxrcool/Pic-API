<?php
$APIname = basename(__FILE__,".php");//API名称(文件名称为该PHP文件名称，例：“img.php”名称为“img”)
$image_file = $APIname.'.txt';//API图库链接库（默认为API同名txt文件）
$PV = 'pv'.$APIname.'.txt';//API调用统计文件（默认为API同名txt文件）
//所有API调用来源统计
if(is_file("PVIP.txt")){
    if($_SERVER['HTTP_REFERER']!=NULL){//来源地址不为空
    $count=$_SERVER['HTTP_REFERER']."000"."\n";
    file_put_contents("PVIP.txt", $count, FILE_APPEND);
    $file=file("PVIP.txt");
    $file2=preg_replace('/000/', '',$file);
    $array=array_values(array_unique($file2));
    file_put_contents("PVIP.txt",$array);
    error_log(date('Y/m/d H:i:s:【').$APIname.' API】调用来源：'.$_SERVER['HTTP_REFERER'].PHP_EOL,3, "./log.log");
    } else {
    error_log(date('Y/m/d H:i:s:【').$APIname.' API】无调用来源'.PHP_EOL,3, "./log.log");}
} else {
    file_put_contents("PVIP.txt",$_SERVER['SERVER_NAME']);
    error_log(date('Y/m/d H:i:s:').'无PVIP文件，已创建'.PHP_EOL,3, "./log.log");
}
//单项API调用次数统计
if(is_file($PV)){
    $count=file_get_contents($PV);
    $count++;
    file_put_contents($PV, $count);
} else {
    file_put_contents($PV,1);
}
if(is_file($image_file)){ //图片库存在
$data = file($image_file); //将文件存放在一个数组中;
$num = count($data); //条数;
$id = mt_rand(0,$num-1); //随机数字;
$url = chop($data[$id]); //显示第几行数据,并去除空格;
header("location:$url"); //直接输出图片链接地址
} else {
    file_put_contents($image_file,'https://pan.cxr.cool/s/4dmg6z'); //图片库不存在则创建并添加一条图片链接
    $data = file($image_file); //将文件存放在一个数组中;
    $num = count($data); //条数;
    $id = mt_rand(0,$num-1); //随机数字;
    $url = chop($data[$id]); //显示第几行数据,并去除空格;
    header("location:$url"); //直接输出图片链接地址
}
?>
