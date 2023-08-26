@extends('layouts.template')


@section('title')
WowBaccarat
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')

<div class="container-fluid m-0 p-0" style="margin: 0px">
  <div class="d-none d-lg-block white">
  <div class="container-fluid">
  <div class="row bg-login w-100" style="height: 100vh">
  <div class="col-lg-6 col-md-0 col-sm-0 p-0 d-none d-lg-block">
  
  </div>
  <div class="col-lg-6 p-0 login-container h-100">
  <div class="login-bg h-100">
  
  </div>
  <div class="row h-100">
  <div class="col-1 my-auto"></div>
  <div class="col-10 my-auto">
  <div>
  <img class="mx-auto d-block" src="{{ url('/assets/wow_banner-24abf6f1f41bfde12615a4ff6fdc0afbae8476ec3245102d91d4bb21cfd83c0e.png') }}">
  </div>
  <div class="login-form">
  <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
    {{ csrf_field() }}
  <div>
  <input autofocus="autofocus" class="login-input-1" type="text" name="username" id="user_username">
  </div>
  <div>
  <input autocomplete="off" class="login-input-2" type="password" name="password" id="user_password">
  </div>

  <input type="submit" name="commit" value="" class="login-button" >
  </form> </div>
  <div class="row error-message">
  <div class="col my-auto text-center">
  </div>
  </div>
  </div>
  <div class="col-1 my-auto"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <div class="d-block d-lg-none white">
    <div class="row bg-login-m w-100 m-0 p-0" style="height: 100vh">
    <div class="col-lg-12 p-0 login-container h-100">
    <div class="row h-100 p-0 m-0">
    <div class="col-12 my-auto">
    <div>
    <img class="mx-auto d-block" src="{{ url('/assets/wow_banner-24abf6f1f41bfde12615a4ff6fdc0afbae8476ec3245102d91d4bb21cfd83c0e.png') }}">
    </div>
    <div class="login-form">
    <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
      {{ csrf_field() }}
    <div>
    <input autofocus="autofocus" class="login-input-1" type="text" name="username" id="user_username">
    </div>
    <div>
    <input autocomplete="off" class="login-input-2" type="password" name="password" id="user_password">
    </div>

    <input type="submit" name="commit" value="" class="login-button"  >
    </form> </div>
    <div class="row error-message">
    <div class="col my-auto text-center">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection

@section('scripts')

    <script>
        function myFunction() {
            document.getElementById("new_user").submit();
        }
</script>
  

@stop('scripts')