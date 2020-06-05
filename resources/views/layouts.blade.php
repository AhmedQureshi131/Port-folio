<html>
<head>
<script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="header">
    @section('header')
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="front">Welcome To Ahmed Qureshi Website</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="navbar-brand" href="about">About Me</a></li>
      <li><a class="navbar-brand" href="list">Work Experience</a></li>
      <li><a class="navbar-brand" href="academic">Academic Experience</a></li>
      <li><a class="navbar-brand" href="links">Links</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="navbar-brand" href="/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    @show
    </div>
    <div class="content">
    @section('content')
    @show
    </div>
    <div class="footer">
    @section('footer')
    <h1>Footer</h1>
    @show
    </div>



</body>

</html>