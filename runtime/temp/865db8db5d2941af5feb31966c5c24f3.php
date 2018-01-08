<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\xampp\htdocs\admin\public/../app/admin\view\admin\admin-add.html";i:1513935445;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Alexa-Admin
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="__STATIC__/css/x-admin.css" media="all">
        <script src="__STATIC__/js/echarts.common.min.js"></script>
    </head>

    <body>
        <div class="x-body">
            <form class="layui-form" method="post" action="">
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>登录名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>将会成为您唯一的登入名
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="email" required="" lay-verify="email" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="role" class="layui-form-label">
                        <span class="x-red">*</span>角色
                    </label>
                    <div class="layui-input-inline">
                      <select name="role">
                        <option value="">请选择角色</option>
                        <option value="0">超级管理员</option>
                        <option value="1">管理员</option>
                      </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_pass" name="password" required="" lay-verify="pass" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        4到16个字符
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>确认密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="repass" required="" lay-verify="repass" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                        <input type="submit" value="增加" class="layui-btn" lay-filter="add" lay-submit="" />
                </div>
            </form>
        </div>
                                        <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        


        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            
              //自定义验证规则
              form.verify({
                nikename: function(value){
                  if(value.length < 2){
                    return '昵称至少得2个字符啊';
                  }
                }
                ,pass: [/(.+){4,12}$/, '密码必须4到12位']
                ,repass: function(value){
                    if($('#L_pass').val()!=$('#L_repass').val()){
                        return '两次密码不一致';
                    }
                }
              });

              
              
            });
        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>

</html>