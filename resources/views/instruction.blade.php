@extends('layouts.app')

@section('head')
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

@endsection

@section('top_bar')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="logo-main-block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          @if ($setting)
          <a href="{{ url('/') }}" title="{{$setting->welcome_txt}}">
          <img src="{{ asset('public/frontend/icon/logo_new.png')}}" class="mobile_logo" width="100px" height="100px" alt="Brand"></a>
          </a>
          @endif
          </div>
          
      </div>
      </div>
    </div>
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="navbar-header">
              <!-- Branding Image -->
              @if($setting)
                <a class="tt" title="Quick Quiz Home" href="{{url('/')}}"><h4 class="heading">Instructions</h4></a>
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                  <li><a href="{{ route('login') }}" title="Login">Login</a></li>
                  <li><a href="{{ route('register') }}" title="Register">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    
                    <ul class="dropdown-menu" id="dropdown">
                      
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                      </li>
                    </ul>
                  </li>
                 
                  <!-- <li><a href="{{ route('faq.get') }}">FAQ</a></li>
                @endguest
                  @if(!empty($menus))
                    @foreach($menus as $menu)
                      <li><a href="{{ url('pages/'.$menu->slug) }}">{{$menu->name}}</a></li>
                    @endforeach
                  @endif -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection


@section('content')
@if($auth)
<div class="container">
@if(session('error'))
    <div class="alert alert-danger">
        {{-- session('error') --}}
    </div>
@endif

    <div class="row">
      <div class="col-md-12">
          <h1> Please Follow Instructions </h1>
          <p>
            <ul>
              <li>
                  The exam will start on 15th august between 10 Am to 6 Pm. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Arrange for stable Internet connectivity. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
               Giving examination on Laptop or Desktop is highly recommended. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Make sure the mobile/laptop is fully charged. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Power bank for mobile or UPS/Inverter for laptop/desktop should be arranged for uninterrupted power supply. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Students should have sufficient data in Fair Usage Policy (FUP) / Internet plan with sufficient data pack of internet service provider.
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Login to the portal 10 min before the online examination start time
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Close all browsers/tabs before starting the online examination
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Once the exam starts, do not switch to any other window/tab. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              On doing so, your attempt may be considered as malpractice and your exam may get terminated.  
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Do Not Pick Up/Receive the Call during the exam if you are giving the exam on mobile.  
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              This also will be treated as changing the window.
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              To avoid unwanted pop-ups, use of Ad Blocker is recommended. 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Clear browser cache memory on mobile and laptops.
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              Kindly give camera access by clicking yes 
              </li>
            </ul>
          </p>
          <p>
            <ul>
              <li>
              There should not be more than 5 neck movements 
              </li>
            </ul>
          </p>
      </div>
      <div class="col-md-12" style="text-align: center;">
        <a  href="{{url('/home')}}" style="background-color: #AA2672; border-color:#AA2672" class="btn btn-primary" data-wow-delay="0.8s">Start Quiz</a>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
@endif

  @if (!$auth)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">  
            <div class="home-main-block">
              @if ($setting)
                <h1 class="main-block-heading text-center">Jisar Foundation</h1>
              @endif
                <blockquote>
                  Please <a href="{{ route('login') }}">Login</a> To Jisar Foundation >>>
                </blockquote>
            </div>
        </div>
    </div>
  @endif
</div>



@endsection
