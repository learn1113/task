# markdown学习笔记  
Markdown 本质上是 HTML 的简化子集，markdown文件最终会被输出为html格式。例如斜体 `*text*` 对应 `<i>text</i>`，图片 `![alt](url) `对应 `<img>` 标签。这种设计使得两者可以混合使用，复杂场景（如表格合并单元格、嵌入音视频）可通过直接插入 HTML 实现。
## 基本语法
在markdown的代码里面换行
只是加个空格  
换行需要敲两个空格在enter  
**加粗需要在前后加两个星号或加两个下划线**  
*首尾加一个星号是斜体*  
***三个星号是又加粗又斜体***  
~~波浪号是2中划线~~  
***~~也可将不同的组合起来~~***
直接三个星号是划线  
前面加几个#号再加空格就是几级标题，最多六级标题  
***
## 列表
* 无序列表是星号加空格  
1. 有序列表是数字加点加空格  
    * 二级列表是在列表符前加四个空格，再下一级需要空格数×2  

结束列表需要换两行 
***
## 代码块  
在文本开始的上一行加三个`并在结束的下一行加再三个中间的文本会成为代码块，在第一行加语言名字会提示语言  
```  python
import subprocess


class ADBController:
    def __init__(self, device_id=None):
        self.device_id = device_id

    def tap(self, x, y):
        """模拟点击"""
        cmd = f"adb shell input tap {x} {y}"
        if self.device_id:
            cmd = f"adb -s {self.device_id} shell input tap {x} {y}"
        subprocess.run(cmd, shell=True)  
```  
前后一个`是小代码块  
***  
## 引用  
>在文本前加大于号  

引用可以嵌套，其实不只是引用大部分的提示符均可进行嵌套，代码块除外  
***  
## 超链接  
[我不知到怎么说](https://github.com/learn1113/task)  
***  
## 图片  
![图片](https://tse4-mm.cn.bing.net/th/id/OIP-C.1qY14RGVG2-vWNlbsbH85AHaEU?rs=1&pid=ImgDetMain)  
## 表格  
| 姓名 | 年龄 | 性别 |
|----|----|----|  
|小明|19|女|
***
## html  
以下是 Markdown 中常用的 HTML 标签分类及说明.  
<u>内容</u>  
<i>内容</i> 或 <em>内容</em>
<strong>内容</strong> 或 <b>内容</b>  
<del>内容</del> 或 <s>内容</s>  
<del>删除线</del>   
<mark>内容</mark>

上标：<sup>内容</sup>
示例：X<sup>2</sup> → X2
下标：<sub>内容</sub>
示例：H<sub>2</sub>O → H2O

强制换行：`<br>`  

水平线：`<hr>`

自定义区块：<div>内容</div>
段落对齐：<p align="center">居中对齐</p>

图片：<img src="" alt="描述" width="200">
<a href="#section1">跳转到章节</a>



合并单元格：
html
<table>
  <tr><td colspan="2">合并列</td></tr>
  <tr><td rowspan="2">合并行</td></tr>
</table>



***  
## 数学公式与排版  

$$\begin{aligned}
f(x_1,y)=\frac{1}{2}x_1^{2x}+\sqrt[x_1]{y}\\
\not=\\
\approx\\
\leq\\
\geq\\
\times\\
\div\\
\pm\\
\sum\\
\prod\\
\coprod\\
 \sin\pi\\
  \int\\
\iint\\
y\prime\\
\lim_{x\rightarrow+\infty}\\
\cdots\\
\end{aligned}$$



