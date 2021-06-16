# alfred-office-assist-workflow
---------------
### 当前版本

### 计划功能
##### 脚本功能 (基于php脚本实现逻加)
* time
    * 无参数时，列出当前时间戳，以及基于当前时间戳格式化好的时间
    *  带参数时，做时间戳与日期的双向转化
* ip
    * 获取所有网卡ip，选择后复制
* trans 
    * 翻译，依赖有道的workflow脚本逻辑实现
* clock
    * 世界时钟，基于当前时间，列出所有时区的时间

##### 快捷跳转
* baidu：打开百度搜索 - https://www.baidu.com/s?wd={参数}
* google：打开谷歌搜索 - https://www.google.com.hk/search?q={参数}

##### mac脚本 (基于AppleScript实现)
* note
    * 无参数时，返回所有备忘录，点击可打开
    * 带参数时，新建一个备忘录
* todo 
    * 无参数时，返回所有提醒事项，点击打开提醒事项
    * 带参数时，新建一个提醒事项
* remindme
    * 两个参数：分钟、提醒事项
    * 直接发起一个脚本倒计时，显示dialog

```
delay 10
display dialog "吃饭" buttons {"ok"} default button 1
```