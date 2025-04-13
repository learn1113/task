

## HTML

### 一结构标签
1. **标题标签**  
   ```html
   <h1 align="center">主标题</h1> <!-- HTML4方式 -->
   <h1 style="text-align: center">主标题</h1> <!-- HTML5推荐 -->
   ```
   • 支持`h1`-`h6`六级标题
   • *注意：HTML5已弃用align属性，建议使用CSS的text-align*

2. **段落标签**  
   ```html
   <p>段落文本内容</p>
   ```
   • 自动添加首尾空行
   • 支持`title`属性添加工具提示

---

### 二排版标签
3. **换行标签**  
   ```html
   <br> <!-- 标准写法 -->
   <br/> <!-- XHTML兼容写法 -->
   ```
   • 单标签，无闭合标记
   • 强制文本换行

4. **水平线标签**  
   ```html
   <hr color="red" width="80%" size="2"> <!-- 传统属性 -->
   <hr style="border: 2px dashed #333; width: 80%"> <!-- 现代方案 -->
   ```
   • *推荐使用CSS border属性替代传统属性*

---

### 三媒体标签
5. **图片标签**  
   ```html
   <img src="logo.png" 
        alt="公司Logo" 
        title="点击查看大图"
        width="200"
        loading="lazy">
   ```
   • `alt`属性为必填项（SEO优化关键）
   • `loading="lazy"`实现图片懒加载（HTML5新特性）

6. **超链接标签**  
   ```html
   <a href="https://example.com" 
      target="_blank" 
      rel="noopener noreferrer">
      访问示例网站
   </a>
   ```
   • `target="_blank"`新窗口打开
   • `rel`属性增强安全性

---

### 四文本修饰
7. **语义化文本标签**  

   | 标签            | 语义                  | 示例                   |
   |-----------------|---------------------|-----------------------|
   | `<em>`          | 强调内容（斜体）        | `<em>重要通知</em>`     |
   | `<strong>`      | 重要内容（加粗）        | `<strong>警告！</strong>`|
   | `<del>`         | 删除文本              | 原价：<del>¥599</del>  |
   | `<mark>`        | 高亮文本（HTML5新增）   | `<mark>关键内容</mark>` |

8. **无语义标签**  
   ```html
   <span style="color: blue">特殊样式文本</span>
   <i class="iconfont"></i> <!-- 字体图标用法 -->
   ```

---

### 五列表系统
9. **有序列表**  
   ```html
   <ol type="A" start="3">
     <li>第一项</li>
     <li>第二项
       <ul>
         <li>嵌套列表项</li>
       </ul>
     </li>
   </ol>
   ```
   • `type`支持：1（默认）、A、a、I、i
   • `start`定义起始序号

10. **无序列表**  
    ```html
    <ul style="list-style-type: square">
      <li>项目一</li>
      <li>项目二</li>
    </ul>
    ```
    ◦ 推荐使用CSS定义符号样式

---

### 六表格系统
11. **基础表格结构**  
    ```html
    <table border="1">
      <tr>
        <th>姓名</th>
        <th>年龄</th>
      </tr>
      <tr>
        <td>张三</td>
        <td>28</td>
      </tr>
    </table>
    ```
    ◦ 完整结构应包含`<thead>`、`<tbody>`、`<tfoot>`
    ◦ *现代开发建议使用`<table>`配合CSS布局*


12. **Emmet快捷写法**  
    ```html
    /* 快速生成3行2列表格 */
    table>tr*3>td*2{内容$}
    ```
    生成：
    ```html
    <table>
      <tr>
        <td>内容1</td>
        <td>内容2</td>
      </tr>
      <tr>
        <td>内容1</td>
        <td>内容2</td>
      </tr>
      <tr>
        <td>内容1</td>
        <td>内容2</td>
      </tr>
    </table>
    ```

---
## 七表单  
13. 基础表单结构  
```html
<form action="" method="post">
    用户名:<input type="text">
     <input type="submit">
    密码:<input type="password">
     <input type="submit">
</form>
```
* `action`填服务器地址  
* `method`填请求方式  
---
## 八内联元素与块级元素  
|类型| 	常见标签                                                    |	特殊说明|
|-----|----------------------------------------------------------|----------|
|块级元素| ``<div>, <p>, <h1>-<h6>, <ul>, <ol>, <li>, <table>, <form> ``|<address>默认有特殊字体样式|
|内联元素| ``	<span>, <a>, <strong>, <em>, <img>, <input>, <button> ``  |`<img>`属于替换元素，可设宽高|  



* 块级元素：独占一行，前后自动换行  
示例：`<div>`标签默认占满父容器宽度  
* 内联元素：同行排列，直至空间不足才换行  
示例：多个<span>标签可在同一行显示  
---
# CSS  
css是为了让界面变得美观  

---
## 一 语法  
选择器加声明  

```html
<style>
    h1{
    color:red;
    font-size:19px;}
</style>
```
---
## 二 样式
优先级:内联>内部>外部
### 内联样式  
`<p style="color:red;font-size:19px;">文本</p>`

### 内部样式  
内部样式通常在`<head>`内  
```html
<style>
    h1{color:red;
    font-size:19px;
    }
</style>
```  
### 外部样式  
创建一个文件并以css为后缀名，并在文件内写入css语法  
```html
    h1{color:red;
    font-size:19px;
    }
```  
随后在想要引入的html文件的`<head>`中写入`<ink rel="stylesheet" href="css文件地址">`  

---  

## 三 选择器  
### 全局选择器  
可以与任意元素匹配  
```html
*{
 h1{color:red;
    font-size:19px;
}
```  
### 标签选择器  
标签包括`<p>` `<h1>` `<img>` `div` `body` `<spam>`等  
```html
h1{color:red;
    font-size:19px;
    }
```  
### 类选择器  
首先对标签取类名，同一个标签可由多个类选择器控制
`<p class="a b">文本</p>`  
然后定义类选择器  
```html
.a{color:red;
font-sizes:34px;}
```   
  
### id选择器  
`<p id="q"><\q>`  
`#q{color:red;}`  
### 伪类选择器  
`a:hover { color: red; }  /* 鼠标悬停时链接变红 */`

---  
## 四 字体属性  
| 属性名称	                                                                      | 功能描述	                                                      | 常用属性值	                                              |
|----------------------------------------------------------------------------|------------------------------------------------------------|-----------------------------------------------------|
| font-family                                                                | 	定义字体族科                                                    | 	"Arial", "微软雅黑", sans-serif（需考虑字体兼容性）              |	
| font-size	                                                                 | 设置字号大小                                                     | 	16px, 1.2rem, larger（支持绝对/相对单位）	                   |
| font-weight| 	控制字体粗细	| normal（默认）, bold, lighter, 100-900（数值越大越粗）          |	
 | font-style|                                                             	定义字体风格|	normal（正常）, italic（斜体）, oblique（倾斜）	        |
 | color| 	设置文本颜色| 	#FF0000, rgb(255,0,0), rgba(255,0,0,0.5)（支持透明度）	   |
 | line-height	| 控制行间距| 	1.5（倍数）, 24px, 150%（建议使用无单位数值）	                    |
 | text-align| 	文本水平对齐	| left, center, right, justify（两端对齐）	                 |
 | letter-spacing| 	调整字符间距| 	normal, 2px, -1px（支持负值）	                           |
 | word-spacing	| 控制单词间距| 	normal, 0.5em（常用于英文排版）	                            |
 | text-decoration	| 添加文本装饰线| 	none, underline, overline, line-through, wavy（波浪线） |	
 | text-transform	| 转换文本大小写	| capitalize（首字母大写）, uppercase, lowercase, none	      |
 | vertical-align| 	垂直对齐方式| 	baseline（基线对齐）, sub, super, top, middle	           |
 | text-indent	| 设置首行缩进| 	2em（相对单位）, 20px（绝对单位）	                             |
 | text-shadow	| 添加文字阴影| 	2px 2px 4px rgba(0,0,0,0.5)（水平偏移 垂直偏移 模糊半径 颜色）	    |
|  font-variant| 	字体变形效果| 	normal, small-caps（小型大写字母）                         |  
  
---  
## 五 背景属性  

| **属性名称**            | **功能描述**                                                                 | **常用属性值/示例**                                                           |
|-------------------------|-----------------------------------------------------------------------------|------------------------------------------------------------------------|
| **background**          | 简写属性（可同时设置多个背景属性）                          | `background: #fff url(bg.jpg) no-repeat center/cover fixed;`           |
| **background-color**    | 设置背景颜色                                                | `#FF0000`、`rgba(255,0,0,0.5)`（支持透明度）                                   |
| **background-image**   | 定义背景图像（支持多图叠加）                               | `url('image.jpg')`、`linear-gradient(to right, red, blue)`              |
| **background-repeat**   | 控制背景图重复方式                                          | `repeat`（默认）、`no-repeat`、`repeat-x`、`repeat-y` `cover`                  |
| **background-position** | 设置背景图起始位置                                          | `center top`、`20% 50%`、`100px 200px`（支持混合单位）                           |
| **background-size**     | 调整背景图尺寸                                                 | `cover`（覆盖容器）、`contain`（适应容器）、`100px 200px`                            |
| **background-attachment** | 定义背景图滚动方式                                           | `scroll`（随内容滚动）、`fixed`（固定视口）                                          |
| **background-clip**     | 指定背景绘制区域                                                   | `border-box`（默认）、`padding-box`、`content-box`（影响渐变色/图片显示范围）             |
| **background-origin**   | 定义背景定位基准区域                                               | `padding-box`（默认）、`border-box`、`content-box`（与`background-position`配合） |
| **background-blend-mode** | 设置背景混合模式（需多背景叠加）                                     | `multiply`（正片叠底）、`screen`（滤色）、`overlay`（叠加）                            |  
## 六 文本属性  

| **属性名称**          | **功能描述**                                                                 | **常用属性值**                                                                 | **补充说明**                                                                 |
|-----------------------|-----------------------------------------------------------------------------|-------------------------------------------------------------------------------|-----------------------------------------------------------------------------|
| **color**             | 设置文本颜色                                                                | `#FF0000`、`rgb(255,0,0)`、`rgba(255,0,0,0.5)`（支持透明度）                   | 可通过 `currentColor` 继承父级颜色                                  |
| **text-align**        | 控制文本水平对齐                                                            | `left`、`right`、`center`、`justify`（两端对齐）                                | `justify` 对最后一行无效，需结合 `text-align-last` 调整             |
| **text-decoration**   | 添加文本装饰线                                                              | `underline`（下划线）、`overline`（上划线）、`line-through`（删除线）、`none` | CSS3 支持复合写法，如 `text-decoration: red wavy underline`         |
| **text-transform**    | 转换文本大小写                                                              | `uppercase`（全大写）、`lowercase`（全小写）、`capitalize`（首字母大写）       | 常用于统一表单输入或标题格式                                        |
| **text-indent**       | 设置首行缩进                                                                | `2em`（相对单位）、`20px`（绝对单位）                                           | 负值可实现悬挂缩进效果                                              |
| **text-shadow**       | 添加文字阴影                                                                | `2px 2px 4px rgba(0,0,0,0.5)`（水平偏移、垂直偏移、模糊半径、颜色）             | 多层阴影用逗号分隔，如 `text-shadow: 1px 1px #000, 2px 2px #fff`    |
| **letter-spacing**    | 调整字符间距                                                                | `2px`（扩展）、`-1px`（收缩）                                                   | 设置 `normal` 恢复默认间距                                          |
| **word-spacing**      | 调整单词间距                                                                | `0.5em`（常用于英文排版）                                                      | 对中文无效（中文无单词概念）                                        |
| **line-height**       | 设置行高                                                                    | `1.5`（倍数）、`24px`（固定值）                                                 | 无单位值基于当前字体大小计算（推荐写法）                           |
| **vertical-align**    | 控制行内元素的垂直对齐                                                      | `baseline`（基线对齐）、`top`（顶部对齐）、`middle`（居中）                     | 对表格单元格和行内块元素生效                                       |
| **white-space**       | 处理空白符和换行                                                            | `nowrap`（不换行）、`pre`（保留格式）、`pre-line`（合并空格但保留换行）         | 结合 `text-overflow: ellipsis` 实现文本溢出省略号                   |
| **direction**         | 设置文本方向                                                                | `ltr`（左到右）、`rtl`（右到左）                                                | 需配合 `unicode-bidi: bidi-override` 强制生效                       |  
## 七 CSS盒子模型  
CSS盒子模型是网页布局的核心机制，每个HTML元素（如 `<div>`、`<p>` 等）均被视为一个矩形盒子，由以下四部分组成：
1. **内容（Content）**  
   元素的文本、图片等核心信息区域，通过 `width` 和 `height` 定义尺寸。当内容超出时，可通过 `overflow` 控制显示方式（隐藏、滚动条等）。
   
2. **内边距（Padding）**  
   内容与边框之间的缓冲区域，通过 `padding` 属性设置。可单独控制四边（如 `padding-top`）或简写为 `padding: 上 右 下 左`。

3. **边框（Border）**  
   围绕内容和内边距的线条，通过 `border` 设置宽度、样式（实线、虚线等）和颜色。例如：`border: 2px solid red`。

4. **外边距（Margin）**  
   盒子与其他元素之间的间距，通过 `margin` 控制。默认情况下，相邻元素的垂直外边距会合并（折叠）。
   
## 八 弹性盒子模型  
 设置一个`display`的属性的值为`flex`将其定义为弹性盒子模型，主要作用是设置多个盒子模型的布局。  
默认情况下里面的盒子是横向排列通过`flex-direction`属性设置排列方向。  
### 1 父类属性

| 属性名           | 说明                                                                 | 常用属性值                                                                                   | 
|------------------|----------------------------------------------------------------------|--------------------------------------------------------------------------------------------|
| `display`        | 定义容器为弹性布局模式                                               | `flex`（块级弹性容器）、`inline-flex`（行内弹性容器）                                        |  
| `flex-direction` | 设置主轴方向（子元素排列方向）                                       | `row`（水平左→右）、`row-reverse`（水平右→左）、`column`（垂直上→下）、`column-reverse`（垂直下→上） |  
| `flex-wrap`      | 控制子元素是否换行                                                  | `nowrap`（不换行）、`wrap`（换行，首行在上）、`wrap-reverse`（换行，首行在下）               |  
| `flex-flow`      | `flex-direction` 和 `flex-wrap` 的简写形式                           | 例如：`flex-flow: row wrap`                                                                 |  
| `justify-content`| 控制子元素在**主轴**上的对齐方式                                     | `flex-start`（左对齐）、`flex-end`（右对齐）、`center`（居中）、`space-between`（两端对齐）、`space-around`（均分间距带边距）、`space-evenly`（完全均分） |  
| `align-items`    | 控制子元素在**交叉轴**上的对齐方式（单行）                           | `stretch`（拉伸填充）、`flex-start`（顶部对齐）、`flex-end`（底部对齐）、`center`（垂直居中）、`baseline`（基线对齐） |  
### 2 子类属性  

| 属性名          | 说明                                                                 | 常用属性值                                                                                   | 
|-----------------|----------------------------------------------------------------------|--------------------------------------------------------------------------------------------|
| `order`         | 调整子元素的显示顺序，数值越小越靠前                                 | 整数（可为负值），默认 `0`                                                                  |  |
| `flex`          | 复合属性，定义子元素的伸缩比例（`flex-grow`、`flex-shrink`、`flex-basis`） | 例如：`flex: 1 0 auto`（扩展比例1，不收缩，初始尺寸自动）                                     |     |
| `align-self`    | 单独设置某个子元素在**交叉轴**上的对齐方式，覆盖容器的 `align-items`  | `auto`（继承容器）、`flex-start`、`flex-end`、`center`、`stretch`                            |  |
| `flex-shrink`   | 定义子元素收缩比例（按比例缩小超出空间）                             | 非负整数，默认 `1`（允许收缩）                                                              |     |
| `flex-basis`    | 设置子元素的初始尺寸，优先级高于 `width`                             | `auto`（基于内容）、具体长度（如 `200px`）                                                  |     |  
## 九 浮动  
1. 设置`float`属性讲元素放置在浮动层，浮动层的元素可以覆盖父类文档流。属性值有`left` `right`,不支持竖向浮动。  
2. 若想清除浮动即想让浮动层的元素不再覆盖文档流，对受影响的元素添加`clear:both;`  
## 十 定位  
`position`属性指定了定位的属性  

|值|属性|  
|----|-------------|  
|`relative`|相对定位|  
|`absore`|绝对定位|
|`fixed`|固定定位| 
其中绝对定位可以脱离文档流，可以使用`right` `left` `top` `bottom`设置位置
```html
.box1{
width:49px;
height:89px;
position:fixed;
left:30px;
right:54px;
top:39px;
bottom:30px;
background:red;}
```
  
1. 绝对定位相当于设置新的浮动层并且能设置多层  
2. 固定定位不会随着页面的滚动而改变位置  
3. 绝对定位和相对定位是相对于父级定位元素而定位，即随着父级定位元素位置的改变而改变  
4. `z-index`决定绝对定位的覆盖顺序，值的大小决定覆盖顺序的先后  
## 十一 CSS新特性  
`border-radius`将边框的四个角变圆  
## 十二 单位  

| **类型**       | **单位**  | **含义**                                                                 |
|----------------|-----------|--------------------------------------------------------------------------|
| **绝对单位**   | `px`      | 像素单位，基于屏幕显示的最小单元，固定但受设备分辨率影响 | 
|                | `pt`      | 印刷单位，1pt = 1/72英寸，常用于打印设计              |
|                | `cm/mm/in`| 厘米、毫米、英寸，物理尺寸单位，多用于印刷场景             | 
| **相对单位**   | `%`       | 百分比，相对于父元素的对应属性值（如宽度、字体大小）    | 
|                | `em`      | 相对于当前元素的字体大小（若未设置则继承父级）         | 
|                | `rem`     | 相对于根元素（`<html>`）的字体大小                     | 
|                | `vw/vh`   | 视口宽度/高度的1%，用于响应式布局（如`50vw`为视口宽度一半） | 
|                | `vmin/vmax`| 取视口宽高中较小值（vmin）或较大值（vmax）的1%             | 
| **特殊用途单位**| `ex`      | 当前字体中小写字母"x"的高度                              | 
|                | `ch`      | 字符"0"的宽度，适用于等宽字体布局                         | 
|                | `fr`      | 弹性布局（Grid/Flexbox）中的空间分配单位，表示剩余空间的份额   | 
## 十三  transition
### 一、**基础语法与核心参数**
`transition` 是一个复合属性，用于定义元素属性变化的过渡效果，其完整语法为：  
```css
transition: [property] [duration] [timing-function] [delay];
```
对应四个子属性：  

| **参数**             | **含义**                                                                 | **默认值**        | **示例值**              |
|----------------------|--------------------------------------------------------------------------|------------------|-------------------------|
| `transition-property` | 指定哪些CSS属性需要过渡（如 `width`, `opacity`）                         | `all`（所有属性） | `width`, `height, opacity` |
| `transition-duration` | 过渡持续时间（必须指定，否则无效果）                                    | `0s`             | `2s`, `500ms`           |
| `transition-timing-function` | 定义速度曲线（动画如何加速/减速）                                 | `ease`           | `linear`, `ease-in-out`, `cubic-bezier(0.4, 0, 0.2, 1)` |
| `transition-delay`    | 过渡开始前的延迟时间                                                   | `0s`             | `1s`, `200ms`           |

# JS   
js的语法与c语言类似
## 一 引入方式 
1. 嵌入到html文件中 
```html
<body>
<script>
    var a=10;
</script>
</body>
```  
2. 引入本地js文件  
```html
<body>
<scriptc type="text/javascript" src="./wenjian.js"></scriptc>
</body>
```  
## 二 数据类型  
| **数据类型分类**       | **具体类型**      | **描述**                                                                 | **示例**                                                                 |
|------------------------|-------------------|--------------------------------------------------------------------------|--------------------------------------------------------------------------|
| **基本数据类型**       | `String`          | 存储文本，用单引号或双引号包裹，支持转义符（如`\n`）                     | `"Hello"`、`'ITester'`、`"We'll go"`                                     |
|                        | `Number`          | 包含整数和浮点数，统一用 `number` 表示，支持科学计数法                   | `18`、`3.14`、`1e5`、`NaN`（非数值）                                    |
|                        | `Boolean`         | 逻辑值，仅 `true` 或 `false`，常用于条件判断                            | `true`、`false`                                                        |
|                        | `Null`            | 表示空值（需主动赋值），`typeof` 返回 `object`（历史遗留问题）           | `let a = null;`                                                        |
|                        | `Undefined`       | 变量声明未赋值时的默认值                                                 | `let b;`（此时 `b` 为 `undefined`）                                     |
|                        | `Symbol`          | ES6 新增，表示唯一标识符（不可变）                                       | `const id = Symbol('id');`                                              |
| **引用数据类型**       | `Object`          | 键值对集合，可包含属性和方法                                             | `{ name: "CoCo", age: 18 }`                                             |
|                        | `Array`           | 有序数据集合，索引从 0 开始                                              | `[1, "apple", true]`                                                    |
|                        | `Function`        | 可执行代码块，支持参数传递和返回值                                       | `function add(a, b) { return a + b; }`                                  |
| **特殊对象（对象类型）**| `RegExp`          | 正则表达式对象，用于模式匹配                                             | `/^[A-Z]+$/`                                                            |
|                        | `Date`            | 日期和时间对象，支持时间计算与格式化                                     | `new Date("2025-03-25")`                                                |   
## 三 函数  
```html
function 函数名(形参){
};
```  
## 四  DOM对象的获取方法  

| **方法名称**                   | **描述**                                                                 | **返回类型**           | **示例代码**                                                                 | **注意事项**                                                                 |
|-------------------------------|--------------------------------------------------------------------------|------------------------|-----------------------------------------------------------------------------|----------------------------------------------------------------------------|
| **`getElementById()`**        | 通过元素的唯一 `id` 属性获取单个元素对象                                  | `Element` 或 `null`    | `document.getElementById("header")`                                        | 直接返回元素对象，不存在时返回 `null`                          |
| **`getElementsByClassName()`** | 通过类名获取所有匹配的元素集合                                            | `HTMLCollection`       | `document.getElementsByClassName("item")`                                  | 返回动态集合（元素变化时自动更新），需通过索引访问具体元素（如 `[0]`） |
| **`getElementsByTagName()`**  | 通过标签名（如 `div`、`p`）获取所有匹配的元素集合                         | `HTMLCollection`       | `document.getElementsByTagName("li")`                                      | 适用于批量操作同类标签元素                                        |
| **`querySelector()`**         | 使用 CSS 选择器获取第一个匹配的元素                                       | `Element` 或 `null`    | `document.querySelector(".nav li:first-child")`                            | 支持复杂选择器（如伪类），直接返回元素对象                     |
| **`querySelectorAll()`**      | 使用 CSS 选择器获取所有匹配的元素集合                                     | `NodeList`             | `document.querySelectorAll(".item")`                                       | 返回静态集合（元素变化时不更新），需遍历操作                  |
| **`getElementsByName()`**     | 通过 `name` 属性获取元素集合（常用于表单元素）                           | `NodeList`             | `document.getElementsByName("username")`                                   | 仅适用于含 `name` 属性的元素（如 `<input>`）                      |

### **补充说明**
**动态集合 vs 静态集合**  
   • **动态集合**（如 `HTMLCollection`）：元素增删时自动更新，适合频繁操作 DOM 的场景。  
   • **静态集合**（如 `NodeList`）：仅保存查询时的元素快照，需手动刷新。  
## 五 元素对象的创建  
| **方法/属性**                     | **描述**                                                                 | **示例代码**                                                                 | **适用场景**                     |
|----------------------------------|--------------------------------------------------------------------------|-----------------------------------------------------------------------------|----------------------------------|
| **`setAttribute(name, value)`**  | 设置元素的任意属性（包括自定义属性）                                      | `element.setAttribute('data-id', '123')`                                   | 动态修改或添加属性               |  
| **`getAttribute(name)`**         | 获取元素的指定属性值（支持标准属性和自定义属性）                          | `const value = element.getAttribute('class')`                              | 读取属性值用于逻辑判断           |  
| **`removeAttribute(name)`**      | 移除元素的指定属性                                                        | `element.removeAttribute('disabled')`                                      | 解除禁用状态或删除冗余属性       |      
| **直接属性访问（如 `element.id`）** | 直接通过属性名读写标准属性（如 `id`、`className`、`style`）              | `element.id = 'newId';`<br>`element.className = 'active';`                 | 快速修改常见属性                 |  
| **`classList.add/remove/toggle`** | 通过类名操作元素的 CSS 类（支持链式调用）                                | `element.classList.add('active');`<br>`element.classList.toggle('hidden')` | 动态切换样式或交互状态           |  
| **`dataset`**                    | 读写以 `data-*` 开头的自定义属性（通过 `element.dataset.key` 访问）       | `element.dataset.info = 'value';`<br>`const info = element.dataset.info;`   | 存储与元素关联的非显示数据       |          
| **`innerHTML`**                  | 获取或设置元素的 HTML 内容（会解析标签）                                 | `element.innerHTML = '<span>新内容</span>';`                               | 动态插入富文本或结构             |  
| **`innerText`**                  | 获取或设置元素的纯文本内容（过滤 HTML 标签和保留换行）                   | `element.innerText = '纯文本内容';`                                        | 安全修改文本内容                 |          
| **`style` 属性**                 | 直接修改元素的行内样式（需使用驼峰命名法）                                | `element.style.backgroundColor = 'red';`                                   | 动态调整元素样式                 |      
| **`hasAttribute(name)`**         | 检查元素是否包含指定属性                                                  | `if (element.hasAttribute('required')) { ... }`                            | 表单验证或条件判断               |   
```html
<script>
   var text=document.createElement("p")
    var content=document.createTextNode("文本")
    text.appendChild(content);
    text.setAttribute('id','ooooo')
    var contener=document.getElementById("contener")
    contener.appendChild(text)

    
</script>
```    
## 六 事件  
| **事件名称**          | **描述**                                                                 | **触发条件**                                                                 | **是否冒泡** | **应用场景**                     |
|----------------------|--------------------------------------------------------------------------|------------------------------------------------------------------------------|--------------|----------------------------------
| **`click`**          | 鼠标左键单击触发（需先触发 `mousedown` 和 `mouseup`）                     | 左键按下并释放后                                                             | 是           | 按钮点击、表单提交               |  
| **`dblclick`**       | 鼠标左键双击触发                                                         | 连续两次快速单击                                                             | 是           | 文件打开、表格行编辑             |      
| **`mousedown`**      | 鼠标任意按键按下时触发                                                   | 按键按下瞬间                                                                 | 是           | 拖拽开始、自定义按钮交互         |  
| **`mouseup`**        | 鼠标按键释放时触发                                                       | 按键释放瞬间                                                                 | 是           | 拖拽结束、绘制操作完成           |  
| **`mousemove`**      | 鼠标在元素内移动时持续触发                                               | 移动时实时触发                                                               | 是           | 实时绘图、光标轨迹跟踪           |  
| **`mouseover`**      | 鼠标进入元素或其子元素时触发                                             | 进入元素或其子元素边界                                                       | 是           | 悬浮提示、菜单展开               |  
| **`mouseout`**       | 鼠标离开元素或其子元素时触发                                             | 离开元素或其子元素边界                                                       | 是           | 隐藏提示、动画结束               |  
| **`mouseenter`**     | 鼠标首次进入元素时触发（不包含子元素）                                   | 仅进入父元素边界                                                             | 否           | 统计停留时长、区域高亮           |      
| **`mouseleave`**     | 鼠标完全离开元素时触发（不包含子元素）                                   | 仅离开父元素边界                                                             | 否           | 隐藏浮层、触发退出逻辑           |      
| **`contextmenu`**    | 鼠标右键单击触发                                                         | 右键按下时                                                                   | 是           | 自定义右键菜单                   |      
| **`wheel`**          | 鼠标滚轮滚动时触发                                                       | 垂直或水平滚动                                                               | 是           | 页面滚动、缩放操作               |     
### 一、基础使用方法
1. **`addEventListener()` 方法**  
   • **语法**：`element.addEventListener(eventType, listener, [options/useCapture])`  
   • **参数说明**：  
     ◦ **eventType**：事件类型（如 `"click"`、`"keydown"`，不加 `on` 前缀）  
     ◦ **listener**：事件触发时执行的函数  
     ◦ **options**（可选）：配置对象，可设置 `capture`（是否捕获阶段触发）、`once`（是否只触发一次）等  
   • **示例**：  
     ```javascript
     const button = document.querySelector('button');
     button.addEventListener('click', function(event) {
         console.log('按钮被点击！坐标：', event.clientX, event.clientY);
     });
     ```
## 七 querySelectorAll  
返回与指定选择器匹配的所有元，结果以静态 NodeList 形式呈现（类数组对象）。若无匹配项，返回空的 NodeList。  
## 八 toggle  
```
// classList切换类名
button.classList.toggle('active'); // 存在则删除，不存在则添加

// toggleAttribute切换属性（网页4）
input.toggleAttribute('disabled'); // 禁用/启用表单元素

```  
## 九 nextElementSibling  
 是 JavaScript 中用于操作 DOM 的核心属性，其作用是通过仅返回当前元素的下一个同级元素节点，帮助开发者更精准地遍历和操作网页结构。

## 补充  
### `<canvas>`画布标签  
• **图形容器**：`<canvas>`本身是一个透明的画布，仅提供绘制图形的空间，需通过JavaScript调用绘图API操作内容。  
• **脚本依赖**：标签无内置绘图能力，必须结合`getContext("2d")`或`getContext("webgl")`方法获取绘图上下文（如`CanvasRenderingContext2D`对象）实现绘制。

```html
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d"); // 2D绘图环境
body { overflow: auto; }
```  

---
```/* 默认状态：允许滚动 */  
/* 隐藏溢出内容并禁用滚动 */
body { overflow: hidden; }

/* 仅垂直方向隐藏滚动条，水平允许滚动 */
body { overflow-x: hidden; overflow-y: auto; }
```  
---  
### window对象  
window对象的定义与作用
浏览器窗口的抽象
window是浏览器提供的顶层对象，表示用户当前打开的窗口或标签页。它是JavaScript访问浏览器功能（如文档、历史记录、屏幕尺寸等）的入口。  
` window.addEventListener('resize',initCanvas);`  
---  
### 类  
```html
class Letter {
            constructor(x, y) {
                this.char = String.fromCharCode(97 + Math.floor(Math.random() * 26));
                this.x = x;
                this.y = y;
                this.radius = 15; // 碰撞检测半径
                this.vx = (Math.random() - 0.5) * 10; // 初始随机水平速度
                this.vy = 0;
            }
}
```  
类中函数的定义与python类似，constructor是构造函数，在实例化对象初始化对象
### `set`  
1. **唯一性**  
   `Set` 内部通过 **零值相等（SameValueZero）** 算法确保元素唯一性：
   • 基础类型（字符串、数字等）采用严格相等（`===`）比较
   • `NaN` 被视为相等（如 `NaN === NaN`）
   • 对象引用需指向同一内存地址才会被去重
   ```javascript
   const set = new Set([1, 2, 2, NaN, NaN]);
   console.log([...set]); // [1, 2, NaN]
   ```

2. **无序性**  
   尽管元素插入顺序不被保留为索引顺序，但迭代时会按插入顺序遍历。

3. **动态容量**  
   自动扩容，无需预先定义大小，适合处理动态数据。
---   
```html
letters.forEach(letter => {
                letter.update();
                letter.draw();
            });
```
1. **数组遍历逻辑**  
   • `letters` 是一个数组，包含多个 `letter` 对象。
   • `forEach` 是数组的内置方法，用于遍历数组中的每个元素。  
   • 箭头函数 `letter => { ... }` 是回调函数，对每个 `letter` 元素执行操作。

2. **对象方法调用**  
   • `letter.update()`：更新 `letter` 对象的状态（例如坐标、速度等属性）。  
   • `letter.draw()`：根据当前状态绘制 `letter` 对象（如在画布上渲染图形或文本）。
---
```html
function animate() {
    // 1. 清空画布
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // 2. 更新并绘制所有字母对象
    letters.forEach(letter => {
        letter.update();
        letter.draw();
    });
    
    // 3. 碰撞检测
    checkCollisions();
    
    // 4. 请求下一帧动画
    requestAnimationFrame(animate);
}
```  
#### 1. **画布清空**  
`ctx.clearRect(0, 0, canvas.width, canvas.height);`  
• **作用**：擦除整个画布内容，为绘制新帧做准备。  
• **参数意义**：`(0, 0)`为左上角起始坐标，`canvas.width`和`canvas.height`覆盖整个画布区域。  
• **必要性**：若不清空，上一帧内容会与新帧叠加，导致残影或画面混乱

#### 2. **对象更新与绘制**  
`letters.forEach(...)`  
• **对象驱动动画**：假设`letters`是一个包含动态字母对象的数组（类似网页5的飘字动画中的`loves`数组）。  
• **`update()`方法**：更新对象的位置、速度或其他状态（如网页4烟花粒子中的`update`方法计算重力影响）。  
• **`draw()`方法**：将更新后的对象绘制到画布上



#### 3. **动画帧请求**  
`requestAnimationFrame(animate);`  
• **作用**：以浏览器刷新率（通常60Hz）递归调用`animate`，形成动画循环。  
• **优势**：  
  • 自动暂停后台标签页动画以节省资源
  • 比`setTimeout`更平滑（  
  • 时间戳参数可用于计算时间差（`deltaTime`），实现帧率无关的动画速度


     












