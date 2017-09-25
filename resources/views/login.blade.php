<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Facebook Login Form</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body ng-app="myApp" ng-controller="myCtrl">
    <form action="/checkLogin" method="post" class="login">
        <h1>Facebook</h1>
        {{ csrf_field() }}
        <input type="name" name="name" ng-model="input.name" class="login-input" placeholder="Email Address" autofocus>
        <input type="password" name="password" ng-model="input.password" class="login-input" placeholder="Password">
        @if(\Illuminate\Support\Facades\Session::exists('managerError'))
            <span id="cname-error" class="help-block m-b-none" style="color: #f40000;">
                 {{\Illuminate\Support\Facades\Session::get('managerError')}}
            </span>
        @endif
        <input type="submit" value="Login" class="login-submit" >
        <p class="login-help"><a href="index.html">Forgot password?</a></p>
    </form>
    <script src="https://cdn.bootcss.com/angular.js/1.6.6/angular.js"></script>

    <script>
        var app = angular.module('myApp',[]);
        app.controller('myCtrl',function($scope,$http){
            $scope.input = {};
            $scope.submit = function(){
                $http.post('/checkLogin',{input:$scope.input},function(response){
                    console.log(response);
                });
            }
        });
    </script>

</body>
</html>
