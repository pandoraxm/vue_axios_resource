# 使用vue-axios和vue-resource解决vue中调用网易云接口跨域的问题

## 使用方法
```
git clone https://github.com/pandoraxm/vue_axios_resource.git
```

```
cd axios_resource
```

```
cnpm install
```
## 运行
cnpm run dev

## 远程代理
详情请看`Hello.vue`
## 利用php curl代理
页面请求请看`Curl.vue`
php curl部分请看`curl.php`
## node代理
设置请看`config/index.js`里的`proxyTable: {}`部分
页面请求代码请看`Node.vue`

## 如果要运行curl代理的话，请将curl.php放到你Apache或者Nginx服务器根目录，并且保证你的Apache或者Nginx服务器是运行状态

## 详细说明，请看readme.html