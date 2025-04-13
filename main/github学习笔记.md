# github学习笔记  
## 基本概念
repository一个仓库，利用commit可查看更改，fork指将别人的仓库复制，自己可以修改，然后用pull request向制作者发送请求，通过后自己的修改就会作用于制作者的仓库  
## fork流程  
1. 点击目标仓库的fork安建完成后会在自己的账号上生成同名仓库
2. 克隆到本地  
    * git clone会克隆一份到本地的git仓库，一份到本地磁盘  
3. 用`git checkout -b `命令创建一个分支  
4. 在本地磁盘修改完成后用`git add .` `git commit`将修改保存至本地git仓库  
5. 用`git push origin 分支名`将分支上传至github  
6. 若GitHub里的分支更新了用`git checkout main`切换到主分支里，再用`git pull origin main`更新主分支  
7. 用`git checkout 分支名`回到自己创建的分支，用`git rebase main`尝试合并，若出现`rebase conflict`则修改自己修改的代码  
8. 用`git push -f origin 分支名`将修改更新至github  
9. 用pull request请求合并到github的主分支上  
10. 成功后用`git branch -D 分支名`删除分支，再用`git pull origin main`更新主分支  
