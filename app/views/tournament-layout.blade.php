<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Debate Tournaments</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../css/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Rufina:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{ $tournament->name }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Debate<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($debate_pages as $page)
              <li><a href="{{ URL::to($tournament->name.'/'.$page->slug) }}">{{ $page->title }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Speech<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($speech_pages as $page)
            <li><a href="{{ URL::to($tournament->name.'/'.$page->slug) }}">{{ $page->title }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Location<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($location_pages as $page)
            <li><a href="{{ URL::to($tournament->name.'/'.$page->slug) }}">{{ $page->title }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($schedule_pages as $page)
            <li><a href="{{ URL::to($tournament->name.'/'.$page->slug) }}">{{ $page->title }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($other_pages as $page)
            <li><a href="{{ URL::to($tournament->name.'/'.$page->slug) }}">{{ $page->title }}</a></li>
            @endforeach
          </ul>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class='btn btn-default' href="#">Register</a></li>
        <li><a class='btn btn-default' href="#">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>