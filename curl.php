<?php
// header('Content-type:text/html;Charset=utf-8'); 
header('Content-Type:text/json;charset=utf-8');//设置返回文件的类型
header('Access-Control-Allow-Origin: *');//设置允许所有跨域
$id = '19723756';       //id   
$va_url = 'http://music.163.com/api/playlist/detail?';            //验证的 url 链接地址
$post_fields = "id={$id}"; //post提交信息串  
$curl = curl_init(); //初始化一个cURL会话，必有  
//curl_setopt()函数用于设置 curl 的参数，其功能非常强大，具体看手册  
curl_setopt($curl, CURLOPT_URL, $va_url);      //设置验证登陆的 url 链接  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //设置结果保存在变量中，还是输出，默认为0（输出）  
curl_setopt($curl, CURLOPT_POST, 1);           //模拟post提交  
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_fields); //设置post串
//避免https请求报错 Curl error: SSL certificate problem: unable to get local issuer certificate
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$data = curl_exec($curl);  //执行此cURL会话，必有  
// echo "<pre>";
// print_r(json_decode($data));
echo $data;
//检查是否有错误  
if(curl_errno($curl)) {  
    exit('Curl error: ' . curl_error($curl));  
}  

curl_close($curl);         //关闭会话 