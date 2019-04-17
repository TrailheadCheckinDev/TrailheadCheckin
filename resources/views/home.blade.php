<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trailhead Boise Check-In</title>
    <link rel="shortcut icon" type="image/png" href="{{secure_url('images/trail.png')}}"/>


    <!-- Scripts -->
    <script src="{{ secure_url('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ secure_url('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{secure_url('images/trail.png')}}" href = "#" width="50" height="40" alt="trailhead-logo">
                Trailhead Sign-in
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
      
                </ul>
      
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ secure_url('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ secure_url('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
      
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
      
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
      </nav>        
    
        <div class="container mt-4">

<h1>Dashboard</h1>
<div class = "jumbotron border" style = "background-color: white;">
  @if ($isAdmin == 'info@trailheadboise.org')
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Most Recent Logins
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Login Time</th>
                  </tr>
                </thead>
                <tbody>
                 
                    @foreach($instances as $instance)

                    <tr>
                        <td>{{ $instance->name }}</td>
                        <td>{{ $instance->email }}</td>
                        <td>{{ $instance->login_date }}</td>
                    </tr>

                     @endforeach
                </tbody>
              </table>        
            </div>
      </div>
    </div>



    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           All Users
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Login Time</th>
                  </tr>
                </thead>
                <tbody>
                 
                    @foreach($users as $user)

                    <tr>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->last_login_at}}</td>
                    </tr>

                     @endforeach
                </tbody>
              </table>   
        </div>
      </div>
    </div>
  </div>
</div>

                @else
                    <p><span style = "font-style: bold;">Name: </span>{{$ourUser->name}}</p>
                    <p><span style = "font-style: bold;">Email: </span>{{$ourUser->email}}</p>
                  </div>

                @endif


                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


              </div>

</body>

</html>