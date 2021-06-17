# alfred-office-assist-workflow
---------------
### 安装
* 安装alfred与powerpack插件
* 安装php
```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
brew install php7
```
* 在output中找到.workflow文件，双击安装

### 当前版本 v0.0.5
* 当前版本已基本实现计划中的所有功能，可支持以下命令
* time {时间戳 or 日期}，实现时间戳与格式化日期的双向转化，选择后可复制
* now，列出当前时间戳，以及常用的格式化日期，选择后可复制
* ip，获取本机ip、子网掩码、组播地址、本机ipv6地址，选择后可复制
* trans {文本}，移植有道翻译的workflow脚本，实现翻译逻辑
* clock，显示所有时区的当前时间，选择后跳转到网站页面，查看当前时区的所有主要城市
* clock {城市}，模糊搜索主要城市，显示对应的时区及当前时间，选择后可复制
* baidu {keyword}，打开百度搜索
* google {keyword}，打开谷歌搜索
* tips {text}，新建一个备忘录，放到tips列表中
* todo {text}，新建一个提醒事项，放到todo列表中
* remindme {text}，新建一个提醒事项，放到remindme列表中
    * 如果当前时间在17点前，设置当天17点提醒
    * 如果当前时间在17点后，设置隔天10点提醒