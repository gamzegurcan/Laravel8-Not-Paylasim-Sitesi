<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets')}}/login/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/login/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/login/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/login/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/login/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <img src="{{asset('assets')}}/login/assets/img/logo.png" alt=""/>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                @include('home.message')
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="{{route('admin_loginCheck')}}" method="post">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input id="email" class="form-control" placeholder="E-mail" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <input id="password" class="form-control" placeholder="Password" name="password" type="password" >
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="{{asset('assets')}}/login/assets/plugins/jquery-1.10.2.js"></script>
<script src="{{asset('assets')}}/login/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/login/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
