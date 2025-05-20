## str_replace  
```
str_replace(
    mixed $search,      // 要查找的目标（字符/数组）
    mixed $replace,     // 替换值（字符/数组）
    mixed $subject,     // 被搜索的字符串/数组
    int &$count = null  // 可选：替换次数的引用变量
): mixed
```  
区分大小写
## iframe  
iframe（内联框架）用于在当前网页中嵌入另一个页面或资源。其核心属性是 src，用于指定要加载的内容地址。例如：  
```
<iframe src="https://example.com"></iframe>  <!-- 加载外部网页 -->
<iframe src="javascript:alert('Hello')"></iframe>  <!-- 直接执行 JS 代码 -->
```