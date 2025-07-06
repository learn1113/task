import requests
from bs4 import BeautifulSoup
url='https://www.bvquge.com/344/299195'
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0'
}
with open('data.text','w',encoding='utf-8') as f:
    while True:
        resp=requests.get(url=url,headers=headers)
        soup=BeautifulSoup(resp.text,'lxml')
        h=soup.find_all('div',class_='prenext')
        href=h[0].find('a',string='下一页')
        if not href:
            href=h[0].find('a',string='下一章')
        print(href['href'])
        s=soup.find_all('div',class_='con')
        for div in s:
            f.write(div.get_text())
        url=f'https://www.bvquge.com{href['href']}'
        if href['href']=='/344':
            break

