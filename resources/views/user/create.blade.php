<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录 - 无念堂</title>
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
            <h5>登录</h5>
        </div>
        <div class="card-body">
            @include('shared._errors')

            <form method="POST" action="{{ route('dologin') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">记住我</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">登录</button>
            </form>

            <hr>

            <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
        </div>
    </div>
</div>
</body>
</html>