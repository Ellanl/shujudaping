# 项目名称

**简介：**该项目为基于docker容器和ubuntu自动化运维的主机数据可视化大屏

## 目录

- [安装](#安装)
- [使用方法](#使用方法)
- [贡献指南](#贡献指南)
- [许可证](#许可证)
- [联系信息](#联系信息)

## 安装

提供安装步骤：按照项目目录创建对应的文件，创建完对应的文件后进入项目所在的目录运行项目，执行`docker-compose up -d --build`
# 进入项目目录
cd fianltestcp

# 安装依赖
`docker-compose up -d --build`

## 使用方法

展示如何使用你的项目：

首页

![image-20250617131926742](.\finaltest\showimages\image-20250617131926742.png)

点击添加

![image-20250617132137663](.\finaltest\showimages\image-20250617132137663.png)

添加成功

![image-20250617132217049](.\finaltest\showimages\image-20250617132217049.png)

点击修改配置

![image-20250617132234884](.\finaltest\showimages\image-20250617132234884.png)

搜索框输入要查找的主机IP

![image-20250617132304957](.\finaltest\showimages\image-20250617132304957.png)

点击×号即可删除

![image-20250617132324519](.\finaltest\showimages\image-20250617132324519.png)

## 注意

如果主机一直无法上线，检查完配置无问题后，先删除原有的主机，进入`controller`容器内执行`croontab -r`，然后`crontab -e`添加如下代码

```bash
* * * * * ansible all -m ping > /var/www/html/test.txt
* * * * * /var/www/html/delete.sh
* * * * * /var/www/html/add.sh
```

然后保存退出重新执行`service cron restart`，再重新添加主机

## 致谢

感谢所有贡献者和支持者！