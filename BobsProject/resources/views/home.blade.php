@extends('layouts.app')
@section('content')
    <div class="container">
        <br><br>
        <h1 class="text-center">Welcome to Bob's Blog, Please Login or Register to Continue...</h1>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col text-left">
            <a class="navbar-brand" href="{{ url('/login') }}">
            <img class="mx-auto d-block" src="img/BblogLogin.png" alt="Blog Login Logo"> 
            </a>
          </div>
          <div class="col text-right">
            <a class="navbar-brand" href="{{ url('/register') }}">
            <img class="mx-auto d-block" src="img/BblogRegister.png" alt="Blog Register Logo"> 
            </a>
          </div>
        </div>
      </div>
@endsection