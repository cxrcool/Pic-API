# Pic-API
简单的PHP随机图片API
## 使用
- 下载源码放入网站根目录，访问[域名]即可
- API地址为`[域名]/img.php`
- 添加更多API，复制`img.php`更改文件名即可（API会自动创建同名图片库及统计文件）
- API调用图片直接修改API同名图片库里的图片链接即可
## 预览
预览网站：https://api.cxr.cool
![image](https://api.screenshotmachine.com?key=f7af6a&url=https%3A%2F%2Fapi.cxr.cool&dimension=1024x768&cacheLimit=14&delay=10000)

## 文件说明
|文件名|描述|额外|
|-|-|-|
|index.php|首页文件|**必要**|
|img.php|随机图片API|**必要**|
|img.txt|API图片链接库|**必要，自动创建**|
|pvimg.txt|API调用统计|自动创建|
|PVIP.txt|API调用来源记录|自动创建|
|IP.txt|API调用网站数量|自动创建|
|log.log|API调用记录|自动创建|
