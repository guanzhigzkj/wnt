<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册 - 无念堂</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        body{
            /*background-image: url("http://pic.wuniantang.cn/bj/bj.jpg");*/
        }
    </style>
</head>
<body>
<div class="offset-md-2 col-md-8">
    <div class="card ">
        <div class="card-header">
            <h5>注册</h5>
        </div>
        <div class="card-body">
            @include('shared._errors')
            @include('shared._messages')
            <form method="POST" action="{{ route('dosignup') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">手机号：</label>
                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}" placeholder="请输入手机号">
                </div>

                <div class="form-group">
                    <label for="email">姓名：</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <button type="submit" class="btn btn-primary">注册</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>