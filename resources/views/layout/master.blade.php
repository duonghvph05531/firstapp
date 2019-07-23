<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PT13312 @yield('title')</title>
    <style>
    .header{
    width:100%;
    height:300px;
    background-image:linear-gradient(to right, #C6FFDD,#FBD786,#2C5364)
    }
    .footer{
    width:100%;
    height:100px;
    background-image:linear-gradient(to right, #C6FFDD,#FBD786,#2C5364)
    }
    </style>
</head>
<body>
<div class="header">
</div>
<nav class="nav">
  <a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>

<div class="content">
    <div>@yield('table_name') table</div>
    <div>
    @yield('table')
    </div>
</div>
</div>
<div class="footer">
</div>
</body>
</html>