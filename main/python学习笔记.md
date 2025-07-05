# 基础语法  
一、变量与赋值

1. 变量定义  
   • 无需声明类型，直接赋值即可创建变量：  
     age = 25       # 整数（int）  
     name = "Alice" # 字符串（str）  
     is_active = True  # 布尔值（bool）
     
   • 动态类型：变量类型可随时改变：  
     x = 10      # int  
     x = "hello" # 改为字符串
     

2. 命名规则  
   • 组成：字母/数字/下划线，不能以数字开头（如 1name 无效）。  

   • 区分大小写：name 和 Name 是不同变量。  

   • 禁止使用关键字（如 if、for）。

3. 多重赋值  
   a, b, c = 1, 2, 3  # 同时为多个变量赋值
   

二、数据类型

基本数据类型

|类型 |示例 |可变性| 说明|
|---|-----|-----|-----|
|int| 10 |不可变| 整数|
|float| 3.14 |不可变 |浮点数|
|str |"Python"| 不可变 |字符串（支持切片）|
|bool| True |不可变 |布尔值（True/False）|
|list| [1, "a", True] |可变 |有序可修改序列|
|tuple| (1, 2, 3) |不可变 |有序不可修改序列|
|dict| {"name": "Alice"}| 可变| 键值对映射|
|set|{1, 2, 3}| 可变| 无序不重复集合|
类型转换

num_str = "10"  
num_int = int(num_str)  # 字符串→整数  
float_val = float(num_int)  # 整数→浮点数


三、运算符

|类别| 运算符 |示例|
|---|-------|---|
|算术 |+, -, *, /, //, %| 5 // 2 → 2（整除）|
|比较| ==, !=, >, <= |age >= 18 → True|
|逻辑 |and, or, not| (x > 0) and (y < 10)|
|成员| in, not in| "a" in ["a", "b"] → True|

四、控制结构

1. 条件语句
```
   score = 85
   if score >= 90:
       print("优秀")
   elif score >= 80:
       print("良好")  # 输出：良好
   else:
       print("及格")
```
2. 循环语句  
```
 • for循环：遍历序列或range()：  
     for i in range(3):  # 输出0,1,2
         print(i)
     
   • while循环：需设置终止条件：  
     count = 0
     while count < 3:
         print(count)
         count += 1  # 避免死循环
```
  
     
   • 循环控制：  

     ◦ break：立即退出循环（如 if i == 2: break）。  

     ◦ continue：跳过当前迭代（如跳过奇数）。

五、函数与模块

1. 函数定义
```
   def add(a, b=0):  # 带默认参数
       """返回两数之和"""
       return a + b
   print(add(3, 5))  # 输出：8
```

2. 模块导入 
```
   import math
   print(math.sqrt(16))  # 4.0
   from datetime import datetime
   print(datetime.now())  # 当前时间
```

六、文件与异常处理
```
1. 文件操作  
   with open("data.txt", "w") as f:  # 自动关闭文件
       f.write("Hello, World!")     # 写入文件
   with open("data.txt", "r") as f:
       content = f.read()           # 读取内容
   

2. 异常处理  
   try:
       num = int(input("输入数字："))
       result = 10 / num
   except ZeroDivisionError:
       print("除数不能为零！")
   except ValueError:
       print("输入非数字！")
   finally:
       print("执行结束")
```

七、关键特性

1. 缩进规则  
```
   • Python 用缩进代替大括号（通常4空格）：  
     if True:
         print("正确")
       print("错误")  # IndentationError
```

2. 输入/输出  
```
   • 输入：input()返回字符串，需类型转换：  
     age = int(input("输入年龄："))  # 字符串→整数
     
   • 输出：print()支持f-string格式化：  
     print(f"姓名：{name}，年龄：{age}")
```
# 类
1. 类的定义  
```python
class St:
 a=20
def s(self):
 print('a')

```
类的函数里面必须要有self参数  
2. 类的继承  
```python
class A:

class B(A):
```
如果类B里有跟类A同名的函数，则执行类B里面的函数  
3. 多重继承
```python
class A(B,C):
 pass
```
若B和C有相同的属性或方法，则从左到右访问
4. 类外增加属性  
```python
class A:
 pass
A.d=1010
a=A()
a.c=12
``` 
5. 构造函数 
```python
class A:
  def __init__(self,x):
     self.x=x
```  
6. super()函数  
```python
class A(B):
 def __init__(self):
  super().__init__:
```
super方法可避免重复调用问题  
# request模块的使用 
1.简单用法  
```python
import requests
url='https://www.beqege.cc/78589/1047851.html'
resp=requests.get(url)
print(resp.text)
```  
2.常见的方法  

| 属性/方法 | 返回值类型 | 说明 | 示例代码                                                                        |
| ---------| --- | --- |-----------------------------------------------------------------------------|
| status_code | int | HTTP 响应状态码（如 200 表示成功，404 表示资源未找到） | `if response.status_code == 200: print("成功")`                               |
| text | str | 响应内容的字符串形式（自动按 encoding 解码） | `print(response.text[:100])` # 打印前100字符                                     |
| json() | dict/list | 解析 JSON 格式的响应体（非 JSON 内容调用会报 JSONDecodeError） | `data = response.json(); print(data["key"])`                                |
| content | bytes | 响应内容的二进制形式（适用于图片、文件下载） | `with open("image.jpg", "wb") as f: f.write(response.content)`              |
| headers | dict | 响应头信息（键值对形式，如 Content-Type） | `print(response.headers["Content-Type"])` # 输出: application/json            |
| cookies | RequestsCookieJar | 服务器返回的 Cookies 对象 | `print(response.cookies.get("session_id"))`                                 |
| url | str | 请求的最终 URL 地址（自动处理重定向后） | `print(response.url)` # 输出: https://example.com/data                        |
| encoding | str | 响应内容编码（从响应头推断，可手动修改） | `response.encoding = "utf-8"` # 强制设置编码                                      |
| apparent_encoding | str | 从内容分析出的备选编码（更准确） | `print(response.apparent_encoding)` # 输出: utf-8                             |
| elapsed | timedelta | 请求耗时（用于性能监控） | `print(f"耗时: {response.elapsed.total_seconds()}秒")`                         |
| raise_for_status() | None | 状态码非 2xx 时抛出 HTTPError 异常 | `try: response.raise_for_status() except requests.HTTPError: print("请求失败")` |
| history | list[Response] | 重定向历史记录（未重定向时为空列表） | `for resp in response.history: print(f"重定向自: {resp.url}")`                  |
|request.header|dict|返回响应头对应的请求头| `respone.request.headers`                                                   |

