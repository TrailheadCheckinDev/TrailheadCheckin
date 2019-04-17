@extends('layouts/app')



@section('content')

<div class = "jumbotron mt-3" style = "text-align: center; background-size: cover; color: white;">
       <h1 style="color:black;"">Welcome to the Trailhead Sign-In Application!</h1>
       <p style="color:black;">To sign-up or register, click one of the buttons below.</p>
       <a href="{{ secure_url('register') }}"><button class = "btn btn-primary btn-lg" role="button" aria-pressed="true"> Register</button></a>
       <a href="{{ secure_url('login') }}"><button class = "btn btn-primary btn-lg" role="button" aria-pressed="true"> Login</button></a>
       
@endsection