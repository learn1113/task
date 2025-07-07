## ip查询  
ip是每个进网设备都有的独特编码  
1. 通过单一的ipv4地址搜索  
```
ip="1.1.1.1"
```  
2. c段查询  
查询`1.1.1.0`到`1.1.1.255`的所有ip结果
```
ip="1.1.1.1/24"
```  
## 端口查询  
每个ip地址下的端口代表了特点的服务及应用程序，端口范围为0到65535  
```
port="80"
也可以配合ip地址查询  
ip="1.1.1.1"&&port="80"
```    
## 协议查询  
1. protocol  
通过协议名进行查询  
```
protocol="http"
```  
2. base_protocol  
基本协议，为其他协议提供支持。通常分为udp和tcp  
3. banner  
对返回信息进行查询，协议数据返回信息与网站数据返回信息不同  
```
banner="Minecraft Serve"
```  
## 域名查询  
1. domain  
根据根域名进行查询  
2. host  
根据子域名进行查询  
## 操作系统,服务器名查询  
1. os  
`os="操作系统名称`  
2. server  
`server="服务器名称"`  
---  
banner和header包含了server和protocol的信息    

---  

## asn和org  
1. asn为自治系统号
2. org为所属组织  
## title  
网页的标题  
## icon_hash 
搜索图标，首先讲对应的图标下载，再拖入fofa能转换成对应的哈希值并搜索  
## js_name和js_md5
输入js文件后fofa会返回使用了该文件的网页，并且计算js_md5的值，有些文件名相同但内容不同，对应的js_md5的值就会不同  
## body_hash  
网页的哈希值，完全一样的网页哈希值相同  
## status_code  
网页状态响应码  
## header_hash  
header去除变量后计算哈希值，其中的header并不是网页中的header  
## sdk_hash  
产品标识标签  
## type  
1. type=service  
协议数据，不包涵html源代码
2. type=subdomain  
包含html源代码  
## Cname  
将一个域名映射到另一个域名上  
## after和before  
`after="2024-02-09"`筛选该时间之后更新的数据  
`before="2024-02-08"`筛选该时间之前的数据  
##  cloud_name&is_cloud  
筛选云服务商  








