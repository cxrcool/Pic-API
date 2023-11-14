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
body{padding-top:50px;font-family: "Source Sans Pro","Hiragino Sans GB","Microsoft Yahei",SimSun,Helvetica,Arial,Sans-serif,monospace;}
.alert{padding-top:5px;padding-bottom:5px;margin-top:10px;margin-bottom:10px;background-color:rgb(217 237 247 / 40%);}
pre{background-color:rgba(255,255,255,.4);}
.bgw{background-color:rgb(255,255,255,.4);border: 1px solid rgb(16 22 26 / 40%);}
.tbody{border-radius: 10px;}
.bg{background:url(https://api.cxr.cool/bing) center 0px / cover;background-attachment:fixed;}
.navbar-inverse {background-color: #ffffff91;border-color: #08080891;}
.navbar-inverse .navbar-brand {color: #000000;}
.navbar-inverse .navbar-nav>li>a {color: #000000;}
::-webkit-scrollbar{width: 0px;}

.table {width: 100%;max-width: 100%;margin-bottom: 0px;}

.nav1 {height: 30px;padding-top: 5px;}
.nav1 a{color: #3C3C3C;text-decoration: none;padding: 8px;cursor: default;}
.nav1 a:hover,#nav1 a:active {color: green;text-decoration: none;cursor: default;}
.nav1 .nav1_no1 {text-decoration: none;border-bottom: solid 4px #5cb85c;}
.no2 ul{padding-left: 0px;line-height: 25px;font-size: 14px;;}
.no2 ul li{list-style: none;}
.no2 ul a{text-decoration: none;cursor: default;}
.no2 ul a:active,.no2 ul a:hover {color: red;text-decoration: none;cursor: default;}
</style>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9c882d997b00cc4b6a44e7c557710207";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
//导航栏单击变换内容
function tabSwitch(_this,num) {
    var tag = document.getElementById("nav9");
    var number = tag.getElementsByTagName("a");   //获取导航栏元素个数(getElementsByTagName是返回元素素组)
    var divNum = document.getElementsByClassName("eachDiv");   //获取导航元素对应的div个数
    for(var i=0;i<number.length;i++){    //number是一个数组，这里应该用number.length显示它的长度5
        number[i].className = " ";   //清除所有导航栏元素的特殊样式
        divNum[i].style.display = "none";   //其他所有div都隐藏
    }
    _this.className = "nav1_no1";//给当前导航栏元素添加样式
    var content = document.getElementById("no2_"+num);//当前导航栏元素对应的div
    content.style.display = "block";//显示当前导航栏元素对应的div部分
}
</script>
</head>
<body class="bg">
<div class="container bgw">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">流浪猫API</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://cxr.cool/" target="_blank">流浪猫</a></li>
                    <li><a href="https://zaim.cn" target="_blank">爱猫书签</a></li>
                    <li><a href="https://w.cxr.cool" target="_blank">服务监控</a></li>
                    <li><a href="/admin" target="_blank">后台数据</a></li>
                </ul>
            </div>
        </div>
    </nav>

<h4>公告</h4>
<pre>
网站服务优化，API链接有所变化(去掉了'.php'后缀)，望尽快更换。例：【https://api.cxr.cool/0.php】-->【https://api.cxr.cool/0】
原链接调用保存到12月份，之后不再更新维护，随时做删除处理。
链接更新后，旧链接不保证稳定访问，请使用新链接。
已更新链接会使用'<del><ins>.php</ins></del>'提示。
</pre><hr>
    <nav id="nav9" class="nav1">
        <a onclick="tabSwitch(this,1)" class="nav1_no1">API接口</a>
        <a onclick="tabSwitch(this,2)">ICO接口</a>
        <a onclick="tabSwitch(this,3)">开发日志</a>
    </nav>
    <div class="no2">
        <div id="no2_1" class="eachDiv" style="display: block">   <!--默认为该div显示-->
            <ul>
            <div class="alert alert-info">
            【PC=电脑端,默认分辨率≥1920x1080;16:9；MO=移动端,默认分辨率≥1920x1080;9:16】<br>
            目前本站服务器资源有限，请自觉控制访问频率。项目已尽量开源，如有需要可以自行搭建使用。<br>
            
            </div>
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
                $pvico=file_get_contents("pvico.txt");
                $pvimg=file_get_contents("pvimg.txt");
                $pv0=file_get_contents("pv0.txt");
                $pvbing=file_get_contents("pvbing.txt");
                $count=$pvico+$pvimg+$pvbing+$pv0;
                //file_put_contents("pv.txt", $count);
                echo'共'.$count.'次';?></span></th>
                <th>更新(*为PHP)</th>
                <th>API描述</th>
            </tr>
            <tr>
                <td>网站图标<span class="label label-success">ICO</span></td>
                <td><del><ins>https://api.cxr.cool/get.php?url=https://cxr.cool</ins></del><br>https://api.cxr.cool/ico/?url=https://cxr.cool</td>
                <td><?php if(is_file("pvico.txt")){$count=file_get_contents("pvico.txt");echo"$count";}?>次</td>
                <td><?php echo date("y/m/d*",filectime("ico/index.php"));?></td>
                <td>有无http(s)://皆可【<a href="https://ico.cxr.cool" target="_blank">其它API</a>】</td>
            </tr>
            <tr>
                <td>必应图片<span class="label label-success">PC</span></td>
                <td>https://api.cxr.cool/bing<del><ins>.php</ins></del></td>
                <td><?php if(is_file("pvbing.txt")){$count=file_get_contents("pvbing.txt");echo"$count";}?>次</td>
                <td><?php echo date("y/m/d*",filectime("bing/index.php"));?></td>
                <td>必应每日壁纸</td>
            </tr>
            <tr>
                <td>动漫图库<span class="label label-success">PC</span></td>
                <td>https://api.cxr.cool/img<del><ins>.php</ins></del> </td>
                <td><?php if(is_file("pvimg.txt")){$count=file_get_contents("pvimg.txt");echo"$count";}?>次</td>
                <td><?php $line=count(file('img/img.txt'));echo $line."P_";echo date("y/m/d",filectime("img/img.txt"));?></td>
                <td>外链调用,不保证外链有效</td>
            </tr>
            <tr>
                <td>动漫黑丝<span class="label label-success">PC</span></td>
                <td>https://api.cxr.cool/0<del><ins>.php</ins></del> | https://zaim.cn/0.php</td>
                <td><?php if(is_file("pv0.txt")){$count=file_get_contents("pv0.txt");echo"$count";}?>次</td>
                <td><?php $files = glob('0/img/*');$file_count = count($files);echo $file_count."P_";echo date("y/m/d",filectime("0/img"));?></td>
                <td>文件夹调用,本站储存,3M|爱猫书签存储,200G 5M加速</td>
            </tr>
            </tbody>
            </table>
            </ul>
        </div>
        <div id="no2_2" class="eachDiv" style="display: none">  
            <ul>
            <div class="alert alert-warning">
                免费查询目标网站favicon.ico<br>
                根据URL地址获取网站的图标<br>
                图标未显示说明该接口可能出现问题，请测试后使用</div>
            <table class="table table-bordered bgw">
            <tbody>
            <tr>
                <th width="20">图</th>
                <th>接口链接示例</th>
                <th>http(s):// 提示（需要 ✓ 不需要 × 皆可 ○）</th>
            </tr>
            <tr>
                <td><img src="https://api.cxr.cool/get.php?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.cxr.cool/get.php?url=https://cxr.cool</td>
                <td>○ 本站服务 支持png;jpg;ico等图片 </td>
            </tr>
            <tr>
                <td><img src="https://favicon.yandex.net/favicon/cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://favicon.yandex.net/favicon/cxr.cool</td>
                <td>× 仅16X16</td>
            </tr>
            <tr>
                <td><img src="https://tools.ly522.com/ico/favicon.php?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://tools.ly522.com/ico/favicon.php?url=https://cxr.cool</td>
                <td>✓</td>
            </tr>
            <tr>
                <td><img src="https://api.iowen.cn/favicon/cxr.cool.png" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.iowen.cn/favicon/cxr.cool.png</td>
                <td>× 结尾必须填 .png</td>
            </tr>
            <tr>
                <td><img src="https://api.xinac.net/icon/?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.xinac.net/icon/?url=https://cxr.cool</td>
                <td>✓</td>
            </tr>
            <tr>
                <td><img src="https://favicon.qqsuu.cn/https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://favicon.qqsuu.cn/https://cxr.cool</td>
                <td>○</td>
            </tr>
            <tr>
                <td><img src="https://api.uomg.com/api/get.favicon?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.uomg.com/api/get.favicon?url=https://cxr.cool</td>
                <td>✓</td>
            </tr>
            <tr>
                <td><img src="https://www.google.com/s2/favicons?domain=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://www.google.com/s2/favicons?domain=https://cxr.cool</td>
                <td>○ 谷歌默认16X16 有墙✈</td>
            </tr>
            <tr>
                <td><img src="https://ico.kucat.cn/get.php?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://ico.kucat.cn/get.php?url=https://cxr.cool</td>
                <td>√</td>
            </tr>
            <tr>
                <td><img src="https://api.vvhan.com/api/ico?url=cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.vvhan.com/api/ico?url=cxr.cool</td>
                <td>×</td>
            </tr>
            <tr>
                <td><img src="https://api.15777.cn/get.php?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://api.15777.cn/get.php?url=https://cxr.cool</td>
                <td>✓</td>
            </tr>
            <tr>
                <td><img src="https://statistical-apricot-seahorse.faviconkit.com/cxr.cool/32" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://statistical-apricot-seahorse.faviconkit.com/cxr.cool/32</td>
                <td>× "32"可选16-256</td>
            </tr>
            <tr>
                <td><img src="https://ico.kucat.cn/get.php?url=https://cxr.cool" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://ico.kucat.cn/get.php?url=https://cxr.cool</td>
                <td>✓</td>
            </tr>
            <tr>
                <td><img src="https://ico.txmulu.com/cxr.cool.png" width="22" rel="nofollow" style="background-image:url(/1.jpg);"></td>
                <td>https://ico.txmulu.com/cxr.cool.png</td>
                <td>×</td>
            </tr>
            </tbody>
            </table>
            </ul>
        </div>
        <div id="no2_3" class="eachDiv" style="display: none">  
            <ul>
            <div class="alert alert-info">
            本站基础服务已开源<br>
            【<a target="_blank" href="https://github.com/cxrcool/Pic-API">Github</a>】【<a target="_blank" href="https://gitee.com/cxr-cool/Pic-API">码云</a>】</div>
<pre>
2023年
11-09 修改网站细节，合并ico.cxr.cool内容
11-05 增加文件夹调用方式，清除多余失效图库
02-05 增加来源网站域名纯净度过滤
2022年
08-28 网站随机图片API开源<a target="_blank" href="https://github.com/cxrcool/Pic-API">Github</a>，欢迎贡献反馈
08-23 优化API调用统计记录
08-18 调整首页内容，新增随机图库API，修复“网站图标”API无法获取SVG图片，及默认图标修改
08-17 上线使用
</pre>
            </ul>
        </div>
    </div>

<hr><h4>使用限制</h4>
<pre>
为了合理使用服务器资源，防止恶意调用，制定了一些规定
对于滥用的行为将会被大范围添加进黑名单，不再予以提供服务
如果其他的需求或问题，请联系<a target="_blank" href="https://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=tNfMxvTXzMaa19vb2A" style="text-decoration:none;">cxr@cxr.cool</a><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=tNfMxvTXzMaa19vb2A" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_01.png"/></a>
</pre>

<hr><h4>隐私声明</h4>
<pre>
会记录调用网站域名、调用次数等数据，但仅供作者参考使用，不向第三方提供。
</pre>

</div>
<footer class="footer">
    <div class="container bgw">
        <p><a href="https://cxr.cool/">流浪猫</a> © <?php echo date("Y") . PHP_EOL;?> </p>
    </div>
</footer>

<script src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>