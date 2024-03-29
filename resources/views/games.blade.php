@extends('layouts.template')


@section('title')
wowbaclaos ສູດບາທີ່ດີທີ່ສຸດ ແລະ ຖືກສຸດໃນປະເທດໄທ ອັນດັບ 1
@stop

@section('stylesheet')

<style>
    .parent-flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 40px calc((100% - (355px * 3)) / 2);
}

.flex-item {
   flex: 0 0 300px;
   margin-bottom: 5px;
}
</style>

@stop('stylesheet')

@section('content')

@php

                                            $now = time(); // or your date as well
                                            $your_date = strtotime(Auth::user()->birthday);
                                            $datediff = $your_date - $now;
                                            $sumday = round($datediff / (60 * 60 * 24));
                                            if($sumday < 0){
                                              $sumday = 0;
                                            }
                     @endphp


<div class="row header-image p-0 m-0">
  <div class="col-6 col-sm-6 col-md-4 p-0">
  <img style="top: 0; height: 75%" src="{{ url('/assets/wow_banner-24abf6f1f41bfde12615a4ff6fdc0afbae8476ec3245102d91d4bb21cfd83c0e.png') }}">
  </div>
  <div class="col-3 col-sm-3 col-md-4 text-center p-0 mt-1">
    <b>{{ Auth::user()->username }}</b><br>
    <b>ຍັງເຫຼືອ {{$sumday}} วัน</b>
  </div>
  <div class="col-3 col-sm-3 col-md-4 text-right p-0 m-0">
  <div class="dropdown">
  <img style="height: 55px" data-toggle="dropdown" src="{{ url('/assets/ic_profile-9ef4e0c709abfa1bcc9f80f25de67d0161e43c31124b5eb3d53f51cbca66e2ba.png') }}">
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: transparent;">
      <a class="dropdown-item" rel="nofollow" href="{{ url('logout') }}">
        <img style="height: 45px" src="{{ url('/assets/logout-2ab8e01ab6d1cc4c426c1d73566b74f880859fe0a6d884b28371137b41cbadcf.png') }}">
      </a>
      @if(Auth::user()->roles[0]['name'] === 'superadmin' || Auth::user()->roles[0]['name'] === 'admin')
      <a class="dropdown-item" rel="nofollow" href="{{ url('admin/dashboard') }}" style="background-color: #fff;">
        เข้าสู่หลังบ้าน
      </a>
      @endif
    </div>
  </div>
  </div>
  </div>


  <div class="container-fluid m-0 p-0">
    <div class="wrapper">
    <div id="content active" style="height: 100vh">
    <div class="bg-casino p-0 m-0 h100">
    <div class="row justify-content-center" style="padding-top: 30px">
    <div class="col-1 col-sm-0 col-md-4"></div>
    <div class="col-10 col-sm-10 col-md-4 p-0 m-0">
    <div class="banner mx-auto">
    <img style="width: 100%" src="{{ url('/assets/select-casino-8e8982f3a23a066153a22388ab920ddabc6d16b2c464f272bf97013cbb6ec32e.png') }}">
    </div>
    </div>
    <div class="col-1 col-sm-0 col-md-4"></div>
    </div>
    <div class="row justify-content-center" style="height: 50vh">
    <div class="col-1 p-0 m-0"></div>
    <div class="col-2 p-0 m-0 my-auto">
    <img style="width: 100%" id="previous" src="{{ url('/assets/ic_left-a77d3df0f9b3c97456cc4b63071948341c6877bb71b4db4175c5e082e1748f85.png') }}" aria-controls="my-slider" tabindex="-1" data-controls="prev">
    </div>
    <div class="col-6 p-0 m-0 my-auto">
    <div class="tns-outer" id="my-slider-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2</span>  of 9</div>
    <div id="my-slider-mw" class="tns-ovh"><div class="tns-inner" id="my-slider-iw">
      <div class="my-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="my-slider" style="transition-duration: 0s; transform: translate3d(-9.09091%, 0px, 0px);">
    
    
        @if(isset($objs))
        @foreach($objs as $u)
            <div class="tns-item" id="my-slider-item8" aria-hidden="true" tabindex="-1">
                <a href="{{ url('rooms?casino='.$u->game_name_short.'&formula=1') }}">
                    <img id="casino_world" class="img-fluid w-100" src="{{ url('images/game/game/'.$u->game_image) }}">
                </a>
            </div>
        @endforeach
    @endif
   
  
  </div></div></div></div>
    </div>
    <div class="col-2 p-0 m-0 my-auto">
    <img style="width: 100%" id="next" src="{{ url('/assets/ic_right-a686198552d71cd741bbb6b72290cf4d41fe6b4a6ab945fbb4b1c786b59879c0.png') }}" aria-controls="my-slider" tabindex="-1" data-controls="next">
    </div>
    <div class="col-1 p-0 m-0"></div>
    </div>
    
    </div>

    </div>
    <nav id="sidebar hidden"></nav>
    </div>
    </div>


  




@endsection

@section('scripts')

<script type="text/javascript">
    var slider = tns({
      container: '#my-slider',
      // items: 1
      // items: 2.9,
      // gutter: 30,
      // edgePadding: 40,
      // "speed": 500,
      "swipeAngle": false,
      // "autoplay": true,
      // rewind: true,
      // "startIndex": 1,
      // controls: false,
      nav: false,
      // mouseDrag: true,
      // prevButton: document.getElementById('#previous'),
      // nextButton: document.getElementById('#next'),
      prevButton: '#previous',
      nextButton: '#next',
      center: true,
      responsive: {
        500: {
          items: 1
        },
        640: {
          gutter: 20,
          items: 1
        },
        900: {
          items: 1
        }
      }
    });
  </script>

@stop('scripts')