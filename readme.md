<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center"><img src="http://assets.qiniu.com/v2/qiniu-409x220.png"></p>


##  Larval 5.1 企业网站

## 说明
基于 <a href="https://github.com/ScumPetard/Laradmin">Laradmin</a> RBAC 后台搭建
视频资源基于七牛云
 
###### 本项目建议只用来做参考

## 开发环境部署/安装

### 基础安装

#### 1. 克隆源代码


    $ git clone https://github.com/ScumPetard/AncientSword.git
#### 2. 安装扩展包依赖
 
 
    $ composer install
    
#### 3. 生成配置文件
 
 
    $ cp .env.example .env
    
#### 4. 生成数据库表
 
 
    $ php artisan migrate
     
 #### 5. 启动服务
  
  
    $ php artisan serve
    
    
## 开源协议

The Laradmin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
    
