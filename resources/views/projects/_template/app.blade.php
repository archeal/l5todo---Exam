<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
       ol > li > form > .btn{
            float: right;
           margin-left:5px;
        }

        ol > li {
            overflow: auto;
        }

        p > .btn-primary{
            color: #fff;
            text-decoration: none;
        }

        body{
            background-color: #DDE1E2 ;
        }

    </style>


</head>
<body>
    <div class="container" id="container">
        <br>
        <br>
        @if (Session::has('message'))
            <div class="flash alert-info"><p>{{ Session::get('message') }}</p></div>    @endif
        @yield('content')
    </div>


</body>
</html>
