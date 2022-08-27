<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1,user-scalable=no">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="keywords" content="流浪猫,API,随机图,随机,随机图片,随机壁纸,ACG,美女,写真,图集,动漫">
    <meta name="description" content="陈小儒的流浪猫API集合">
    <meta name="author" content="陈小儒">
    <title>流浪猫API</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{padding-top:50px}
        .alert{padding-top:5px;padding-bottom:5px;margin-top:10px;margin-bottom:10px;}
        pre{background-color:rgba(255,255,255,.6);}
        .bgw{background-color:rgb(255,255,255,.6);border: 1px solid rgb(16 22 26 / 40%);}
        .bg{background:url(https://api.cxr.cool/img.php) center 0px / cover}
        .navbar-inverse {background-color: #ffffff91;border-color: #08080891;}
        .navbar-inverse .navbar-brand {color: #000000;}
        .navbar-inverse .navbar-nav>li>a {color: #000000;}
    </style>
</head>
<body class="bg">
<div class="container bgw">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="/">流浪猫API</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://cxr.cool/" target="_blank">流浪猫</a></li>
                    <li><a href="https://zaim.cn" target="_blank">爱猫书签</a></li>
                    <li><a href="https://up.cxr.cool/" target="_blank">服务监控</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>流浪猫 API</h1>
        <div class="alert alert-warning">本站所有数据均采集自互联网，本站对您使用这些资源造成的任何后果不负任何责任。</div>
        <div class="alert alert-info">【PC=电脑端；MO=移动端】目前本站服务器资源有限，请自觉控制访问频率。</div>
    <hr><h3>API接口</h3>
        <table class="table table-bordered bgw">
        <tbody>
            <tr>
                <th>API类型</th>
                <th>调用地址<span class="label label-default">
                <?php 
                $IP=file_get_contents("IP.txt");
                if(is_file("PVIP.txt")){
                    $file = 'PVIP.txt';
                    $line = 0 ;
                    $fp = fopen($file , 'r') or die("打开文件失败！"); 
                    if($fp){while(fgets($fp,102400)){$line++;}fclose($fp);file_put_contents("IP.txt", $line);}
                    echo '共'.$IP.'个网站接入';
                } else {file_put_contents("IP.txt",1);} ?></span></th>
                <th>调用统计<span class="label label-default">
                <?php 
                $pvimg=file_get_contents("pvimg.txt");
                $count=$pvimg;
                echo'共'.$count.'次';?></span></th>
                    <th>API描述</th>
            </tr>
            <tr>
                <td>动漫图库<span class="label label-success">PC</span></td>
                <td>https://api.cxr.cool/img.php</td>
                <td><?php if(is_file("pvimg.txt")){$count=file_get_contents("pvimg.txt");echo"$count";}?>次</td>
                <td>动漫图片，个人自用，随缘更新</td>
            </tr>
        </tbody>
        </table>

<hr><h4>开发日志</h4>
<pre>
2022年
08-17 上线使用
</pre>

<hr><h4>使用限制</h4>
<pre>
为了合理使用服务器资源，防止恶意调用，制定了一些规定
对于滥用的行为将会被大范围添加进黑名单，不再予以提供服务
如果其他的需求或问题，请联系<a target="_blank" href="https://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=tNfMxvTXzMaa19vb2A" style="text-decoration:none;">cxr@cxr.cool</a>
</pre>

<hr><h4>隐私声明</h4>
<pre>
会记录调用网站域名、调用次数等数据，但仅供作者参考使用，不向第三方提供。
</pre>

</div>
<footer class="footer">
    <div class="container bgw">
        <p>© <?php echo date("Y") . PHP_EOL;?> <a href="https://cxr.cool/">流浪猫</a></p>
    </div>
</footer>

<script src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>
